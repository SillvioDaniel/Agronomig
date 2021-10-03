using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Drawing;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace trab_agronomig
{
    public partial class uclProduto2 : UserControl
    {
        public uclProduto2()
        {
            InitializeComponent();
            Listar();
        }

        ConexaoBD bd = new ConexaoBD();
        string sql,cod,cpf;
        Login objLogin = new Login();

        public void Listar()
        {

            sql = string.Format( "Select * from produtos where vendedores_cpf = '{0}'", objLogin.CPFUsuario());
            dtgProduto.DataSource = bd.ConsultarTabela(sql);
        }

        private void btnAddNewBooks_Click(object sender, EventArgs e)
        {
            using (frmProduto frmP = new frmProduto())
            {
                frmP.ShowDialog();
            }
        }

        private void uclProduto2_Load(object sender, EventArgs e)
        {
            cpf = "" + objLogin.CPFUsuario();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            if (cmb_procurar.Text != "")
            {
                DataTable dt = new DataTable();
                if (cmb_procurar.Text == "Código")
                {
                    sql = string.Format("select * from produtos where codigo = '{0}'", txtPesquisa.Text);
                }
                else if (cmb_procurar.Text == "Valor")
                {
                    sql = string.Format("select * from produtos where valor = '{0}'", txtPesquisa.Text);
                }
                else if (cmb_procurar.Text == "Nome")
                {
                    sql = string.Format("select * from produtos where nome = '{0}'", txtPesquisa.Text);
                }
                else
                {
                    sql = string.Format("select * from produtos where tipo = '{0}'", txtPesquisa.Text);
                }
                dt = bd.ConsultarTabela(sql);
                dtgpesquisa.DataSource = dt;
                if (dt.Rows.Count > 0)
                {
                    dtgProduto.DataSource = bd.ConsultarTabela(sql);


                }
                else
                {
                    MessageBox.Show("Produto não cadastrado!", "Produto", MessageBoxButtons.OK, MessageBoxIcon.Information);
                }
            }
            else
            {
                MessageBox.Show("Selecione uma opção de busca!");
            }
        }

        private void dtg_produto_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            DataTable dt = new DataTable();
            dt = bd.ConsultarTabela(sql);
            dtgpesquisa.DataSource = dt;

            DialogResult dialogResult = MessageBox.Show("Deseja Excluir esse produto?", "Excluir", MessageBoxButtons.YesNo, MessageBoxIcon.Warning);
            if (dialogResult == DialogResult.Yes)
            {
                sql = string.Format("delete from produtos where codigo = '{0}'", cod = dt.Rows[0]["codigo"].ToString());

                bd.AlterarTabelas(sql);
            }
            else if (dialogResult == DialogResult.No)
            {

            }


        }
    }
    }

