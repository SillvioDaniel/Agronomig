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
    public partial class frmLogin : Form
    {
        public frmLogin()
        {
            InitializeComponent();
        }

        Login objLogin = new Login();

        private void txtSenha_Click(object sender, EventArgs e)
        {
            txtSenha.Clear();
        }

        private void btnFechar_Click(object sender, EventArgs e)
        {
            //Pergunta/ Titulo/ Botoes/ Icone
            if (MessageBox.Show("Deseja sair do sistema? ", "Agronomigs", MessageBoxButtons.YesNo, MessageBoxIcon.Question) == DialogResult.Yes)
            {
                //Fechar a aplicação
                this.Close();
            }
        }

        private void txtUsuario_Click(object sender, EventArgs e)
        {
            txtUsuario.Clear();
        }

        private void txtUsuario_TextChanged(object sender, EventArgs e)
        {

        }

        private void lblCadastra_Click(object sender, EventArgs e)
        {
            txtUsuario.Text = "(Usuário)";
            txtSenha.Text = "Passoword";
            this.Visible = false;
            frmCadastro ca = new frmCadastro();
            ca.ShowDialog();
            this.Visible = true;
        }

        private void btnConfirmar_Click(object sender, EventArgs e)
        {
            if (objLogin.ValidarLogin(txtUsuario.Text, txtSenha.Text))
            {
                this.Visible = false;
                frmMenu menu = new frmMenu();
                menu.ShowDialog();
                this.Visible = true;
            }
            else
            {
                MessageBox.Show("Usuário/Senha incorretos.", "Login", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void frmLogin_Load(object sender, EventArgs e)
        {

        }
    }
}
