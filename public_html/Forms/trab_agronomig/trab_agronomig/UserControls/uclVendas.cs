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
    public partial class uclVendas : UserControl
    {
        public uclVendas()
        {
            InitializeComponent();
            Listar();
            txtPesquisa.Text = " Data: aaaa-mm-dd";

        }

        ConexaoBD bd = new ConexaoBD();
        string sql,cod;
        Login objLogin = new Login();

        public void Listar()
        {
            sql = string.Format("Select * from venda where vendedores_cpf = '{0}'", objLogin.CPFUsuario());
            dtgVendas.DataSource = bd.ConsultarTabela(sql);
        }

        private void btnAddProduto_Click(object sender, EventArgs e)
        {
            using (frmVenda frmP = new frmVenda())
            {
                frmP.ShowDialog();
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            if (cmb_procurar.Text != "")
            {
                DataTable dt = new DataTable();
                if (cmb_procurar.Text == "Codigo")
                {
                    sql = string.Format("select * from venda where codigo = '{0}'", txtPesquisa.Text);
                }
                else if (cmb_procurar.Text == "Total")
                {
                    sql = string.Format("select * from venda where total = '{0}'", txtPesquisa.Text);
                }
                else
                {
                    sql = string.Format("select * from venda where data = '{0}'", txtPesquisa.Text);
                }
                dt = bd.ConsultarTabela(sql);
                dtgpesquisa.DataSource = dt;
                if (dt.Rows.Count > 0)
                {
                    dtgVendas.DataSource = bd.ConsultarTabela(sql);


                }
                else
                {
                    MessageBox.Show("Venda não cadastrada!", "Venda", MessageBoxButtons.OK, MessageBoxIcon.Information);
                }
            }
            else
            {
                MessageBox.Show("Selecione uma opção de busca!");
            }
        }

        private void dtgVendas_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            DataTable dt = new DataTable();
            dt = bd.ConsultarTabela(sql);
            dtgpesquisa.DataSource = dt;

            DialogResult dialogResult = MessageBox.Show("Deseja Excluir essa venda?", "Excluir", MessageBoxButtons.YesNo, MessageBoxIcon.Warning);
            if (dialogResult == DialogResult.Yes)
            {
                sql = string.Format("delete from venda where codigo = '{0}'", dtgpesquisa.Rows[e.RowIndex].Cells[0].Value.ToString());
                bd.AlterarTabelas(sql);
                Listar();
            }
            else if (dialogResult == DialogResult.No)
            {

            }
        }
    }
    }

