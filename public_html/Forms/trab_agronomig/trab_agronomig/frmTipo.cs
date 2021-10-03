using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace trab_agronomig
{
    public partial class frmTipo : Form
    {
        public frmTipo()
        {
            InitializeComponent();
        }

        ConexaoBD bd = new ConexaoBD();
        string sql;
        Login objLogin = new Login();

        public void limpar()
        {
            txtTipo.Clear();
            txtTipo.Focus();
        }

        private void btnSair_Click(object sender, EventArgs e)
        {
            this.Close();
            frmProduto menu = new frmProduto();
            menu.ShowDialog();
        }

        private void btnCadastrar_Click(object sender, EventArgs e)
        {
            if (txtTipo.Text != "" )
            {
                sql = string.Format("insert into tipo values('{0}','{1}')", txtTipo.Text,txtCPF.Text);
                bd.AlterarTabelas(sql);
                MessageBox.Show("Tipo de Produto inserido com sucesso!", "Tipo de Produto", MessageBoxButtons.OK, MessageBoxIcon.Information);
                limpar();
            }
            else
            {
                MessageBox.Show("Você não preencheu algum campo...!", "Erro", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void frmTipo_Load(object sender, EventArgs e)
        {
            txtCPF.Text = "" + objLogin.CPFUsuario();
        }
    }
}
