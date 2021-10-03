using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

using MySql.Data.MySqlClient;
using System.IO;

namespace trab_agronomig
{
    public partial class frmProduto : Form
    {
        public frmProduto()
        {
            InitializeComponent();
        }

        ConexaoBD bd = new ConexaoBD();
        string sql;
        string foto = "", fotinha = "";

        public void Mover()
        {
            string fileName = System.IO.Path.GetFileName(ofdFoto.FileName);

            string sourcePath = foto;
            string targetPath = txtEndereco.Text;

            string sourceFile = System.IO.Path.Combine(sourcePath);
            string destFile = System.IO.Path.Combine(targetPath, fileName);

            if (!System.IO.Directory.Exists(targetPath))
            {
                System.IO.Directory.CreateDirectory(targetPath);
            }

            System.IO.File.Copy(sourceFile, destFile, true);

            if (System.IO.Directory.Exists(sourcePath))
            {
                string[] files = System.IO.Directory.GetFiles(sourcePath);

                foreach (string s in files)
                {
                    fileName = System.IO.Path.GetFileName(s);
                    destFile = System.IO.Path.Combine(targetPath, fileName);
                    System.IO.File.Copy(s, destFile, true);
                }
            }



            fotinha = "../img/" + fileName;
        }

        public void limpar()
        {
            txtNome.Clear();
            txtValor.Clear();
            cbmTipo.SelectedIndex = -1;
            txtNome.Focus();
            imgFoto.Load("semFoto.jpg");
        }

        Login objLogin = new Login();



        private void combo()
        {
            MySqlConnection cn = new MySqlConnection();
            cn.ConnectionString = ("Persist Security info=false;server=localhost;database=trab_agronomig;user=root;pwd=;");
            cn.Open();
            MySqlCommand com = new MySqlCommand();
            com.Connection = cn;
            com.CommandText = "select nome from tipo";
            MySqlDataReader dr = com.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(dr);
            cbmTipo.DisplayMember = "nome";
            cbmTipo.DataSource = dt;
        }



        private void btnTipo_Click(object sender, EventArgs e)
        {
            this.Close();
            frmTipo menu = new frmTipo();
            menu.ShowDialog();
        }

        private void btnSair_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void btnCadastrar_Click(object sender, EventArgs e)
        {
            if (foto != "")
            {
                foto = foto.Replace(@"\", @"\\");


                if (txtNome.Text != "" && txtValor.Text != "" && cbmTipo.Text != "" && txtCPF.Text != "" && txtEndereco.Text != "")
                {
                    Mover();
                    sql = string.Format("insert into produtos values(null,'{0}','{1}','{2}','{3}','{4}')", txtNome.Text, cbmTipo.Text, txtValor.Text, fotinha, txtCPF.Text);
                    bd.AlterarTabelas(sql);
                    MessageBox.Show("Produto inserido com sucesso!", "Produto", MessageBoxButtons.OK, MessageBoxIcon.Information);
                    limpar();
                }
                else
                {
                    MessageBox.Show("Você não preencheu algum campo...!", "Erro", MessageBoxButtons.OK, MessageBoxIcon.Error);
                }


            }
            else
            {
                MessageBox.Show("Escolha uma foto para continuar!!!", "Erro", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }


        }

        private void frmProduto_Load(object sender, EventArgs e)
        {
            txtCPF.Text = "" + objLogin.CPFUsuario();
            combo();
        }


        private void btnFoto_Click(object sender, EventArgs e)
        {
            foto = "";


            if (ofdFoto.ShowDialog() == System.Windows.Forms.DialogResult.OK)
            {
                imgFoto.Load(ofdFoto.FileName);
                foto = ofdFoto.FileName;

            }
        }
    }
}
