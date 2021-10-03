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
    public partial class uclEstoque : UserControl
    {
        public uclEstoque()
        {
            InitializeComponent();
            Listar();
        }
        ConexaoBD bd = new ConexaoBD();
        string sql,cod;
        Login objLogin = new Login();

        public void Listar()
        {
            sql = string.Format("Select * from estoque where vendedores_cpf = '{0}'", objLogin.CPFUsuario());
            dtgEstoque.DataSource = bd.ConsultarTabela(sql);
        }

        private void btnAddEsotque_Click(object sender, EventArgs e)
        {
            using (frmEstoque frmE = new frmEstoque())
            {
                frmE.ShowDialog();
            }
        }

        private void bt_busca_Click(object sender, EventArgs e)
        {
            if (cmb_procurar.Text != "")
            {
                DataTable dt = new DataTable();
                if (cmb_procurar.Text == "Código")
                {
                    sql = string.Format("select * from estoque where codigo = '{0}' ", txtPesquisa.Text);
                }
                else
                {
                    sql = string.Format("select * from estoque where produtos_codigo = '{0}'", txtPesquisa.Text);
                }
                dt = bd.ConsultarTabela(sql);
                if (dt.Rows.Count > 0)
                {
                    dtgEstoque.DataSource = bd.ConsultarTabela(sql);


                }
                else
                {
                    MessageBox.Show("Estoque não cadastrado!", "Estoque", MessageBoxButtons.OK, MessageBoxIcon.Information);
                }
            }
            else
            {
                MessageBox.Show("Selecione uma opção de busca!");
            }
        }

        private void dtgEstoque_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            DataTable dt = new DataTable();
            dt = bd.ConsultarTabela(sql);
            dtgpesquisa.DataSource = dt;

            DialogResult dialogResult = MessageBox.Show("Deseja Excluir esse estoque?", "Excluir", MessageBoxButtons.YesNo,MessageBoxIcon.Warning);
            if (dialogResult == DialogResult.Yes)
            {
                sql = string.Format("delete from estoque where codigo = '{0}'", cod = dt.Rows[0]["codigo"].ToString());
                bd.AlterarTabelas(sql);
            } 
            else if (dialogResult == DialogResult.No)
            {
                
            }
        }
    }
    }

