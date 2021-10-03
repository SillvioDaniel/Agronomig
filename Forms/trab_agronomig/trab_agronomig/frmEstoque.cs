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
using System.Data.SqlClient;

namespace trab_agronomig
{
    public partial class frmEstoque : Form
    {


        public frmEstoque()
        {
            InitializeComponent();
        }
        

        ConexaoBD bd = new ConexaoBD();
        string sql, codigo, valor, foto;


        public void Listar()
        {
            sql = "Select * from produtos";
            dtgpesquisa.DataSource = bd.ConsultarTabela(sql);
        }

        public void limpar()
        {
            txtQuantidade.Clear();
            cbmProduto.SelectedIndex = -1;
            txtQuantidade.Focus();
        }

        Login objLogin = new Login();

        private void combo()
        {
            MySqlConnection cn = new MySqlConnection();
            cn.ConnectionString = ("Persist Security info=false;server=localhost;database=trab_agronomig;user=root;pwd=;");
            cn.Open();
            MySqlCommand com = new MySqlCommand();
            com.Connection = cn;
            com.CommandText = string.Format("select nome from produtos where vendedores_cpf = '{0}' ",txtCPF.Text);
            MySqlDataReader dr = com.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(dr);
            cbmProduto.DisplayMember = "nome";
            cbmProduto.DataSource = dt;
        }


        private void btnSair_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void frmEstoque_Load(object sender, EventArgs e)
        {
            txtCPF.Text = "" + objLogin.CPFUsuario();
            combo();
            Listar();
            cbmProduto.SelectedIndex = -1;
        }

        private void btnCadastrar_Click(object sender, EventArgs e)
        {
            DataTable dt = new DataTable();

            if (cbmProduto.Text != "" && txtQuantidade.Text != "" && txtCPF.Text != "")
            {
                sql = string.Format("insert into estoque values(null,'{0}','{1}','{2}','{3}','{4}','{5}')", cbmProduto.Text, valor, txtQuantidade.Text, foto, txtCPF.Text, codigo);
                bd.AlterarTabelas(sql);
                MessageBox.Show("Estoque do produto inserido com sucesso!", "Estoque", MessageBoxButtons.OK, MessageBoxIcon.Information);
                limpar();
            }
            else
            {
                MessageBox.Show("Você não preencheu algum campo...!", "Erro", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void cbmProduto_SelectedIndexChanged(object sender, EventArgs e)
        {
            DataTable dt = new DataTable();
            sql = string.Format("select codigo from produtos where nome = '{0}'", cbmProduto.Text);
            dt = bd.ConsultarTabela(sql);
            dtgpesquisa.DataSource = dt;
            if (dt.Rows.Count > 0)
            {
                codigo = dt.Rows[0]["codigo"].ToString();
            }

            sql = string.Format("select valor from produtos where nome = '{0}'", cbmProduto.Text);
            dt = bd.ConsultarTabela(sql);
            dtgpesquisa.DataSource = dt;
            if (dt.Rows.Count > 0)
            {
                valor = dt.Rows[0]["valor"].ToString();
            }

            sql = string.Format("select foto from produtos where nome = '{0}'", cbmProduto.Text);
            dt = bd.ConsultarTabela(sql);
            dtgpesquisa.DataSource = dt;
            if (dt.Rows.Count > 0)
            {
                foto = dt.Rows[0]["foto"].ToString();
            }

        }

        private void dtgpesquisa_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }
    }
}
