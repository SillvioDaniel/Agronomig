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

namespace trab_agronomig
{
    public partial class frmVenda : Form
    {
        public frmVenda()
        {
            InitializeComponent();
        }
        DateTime data;
        ConexaoBD bd = new ConexaoBD();
        string sql, codigo, valor, quant;

        public void limpar()
        {
            cbmProduto.SelectedIndex = -1;
            txtTotal.Clear();
            txtCodCliente.Clear();
            dtpData.Text = DateTime.Now.ToString();
            txtQuantidade.Clear();
            txtCPF.Clear();
            txtTotal.Focus();
        }

        Login objLogin = new Login();

        private void btnSair_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void frmVenda_Load(object sender, EventArgs e)
        {
            txtCPF.Text = "" + objLogin.CPFUsuario();
            combo();
            Listar();
            cbmProduto.SelectedIndex = -1;
            txtValor.Clear();
        }

        public void Listar()
        {
            sql = "Select * from produtos";
            dtgpesquisa.DataSource = bd.ConsultarTabela(sql);
        }

        private void combo()
        {
            MySqlConnection cn = new MySqlConnection();
            cn.ConnectionString = ("Persist Security info=false;server=localhost;database=trab_agronomig;user=root;pwd=;");
            cn.Open();
            MySqlCommand com = new MySqlCommand();
            com.Connection = cn;
            com.CommandText = string.Format("select nome from produtos where vendedores_cpf = '{0}' ", txtCPF.Text);
            MySqlDataReader dr = com.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(dr);
            cbmProduto.DisplayMember = "nome";
            cbmProduto.DataSource = dt;
        }

        private void txtQuantidade_TextChanged(object sender, EventArgs e)
        {
            quant = txtQuantidade.Text;
            if (txtQuantidade.Text == "")
            {
                txtQuantidade.Text = "0";
            }
            else
            {
                txtTotal.Text = "" + double.Parse(valor) * double.Parse(quant);
            }
            
        }

        private void cbmProduto_SelectedIndexChanged(object sender, EventArgs e)
        {
            DataTable dt = new DataTable();
            sql = string.Format("select codigo,valor from produtos where nome = '{0}'", cbmProduto.Text);
            dt = bd.ConsultarTabela(sql);
            dtgpesquisa.DataSource = dt;
            if (dt.Rows.Count > 0)
            {
                codigo = dt.Rows[0]["codigo"].ToString();
                valor = dt.Rows[0]["valor"].ToString();
                txtValor.Text = dt.Rows[0]["valor"].ToString();
            }
        }

        private void btnCadastrar_Click(object sender, EventArgs e)
        {
            data = DateTime.Parse(dtpData.Text);

            if (cbmProduto.Text != "" && txtQuantidade.Text != "" && txtCPF.Text != "" && txtCodCliente.Text != "")
            {
                
                sql = string.Format("insert into venda values(null,'{0}','{1}','{2}','{3}','{4}')", txtTotal.Text, data.ToString("yyyy-MM-dd"), txtCPF.Text, codigo, txtCodCliente.Text);
                bd.AlterarTabelas(sql);
                MessageBox.Show("Produto vendido com sucesso!", "Vendas", MessageBoxButtons.OK, MessageBoxIcon.Information);
                
                sql = string.Format("update estoque set quantidade = quantidade - '{0}' where produtos_codigo = '{1}'",txtQuantidade.Text,codigo);
                bd.AlterarTabelas(sql);
                limpar();
            }
            else
            {
                MessageBox.Show("Você não preencheu algum campo...!", "Erro", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }
    }
    }

