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
    public partial class frmCadastro : Form
    {
        public frmCadastro()
        {
            InitializeComponent();
        }

        ConexaoBD bd = new ConexaoBD();
        string sql;

        public void limpar()
        {
            txtNome.Clear();
            txtEndereco.Clear();
            txtTelefone.Clear();
            txtEmail.Clear();
            txtCPF.Clear();
            txtUsuario.Clear();
            txtSenha.Clear();
            txtConfirma.Clear();
        }

        private void txtNome_TextChanged(object sender, EventArgs e)
        {
        }

        private void txtEndereco_TextChanged(object sender, EventArgs e)
        {
        }

        private void txtTelefone_TextChanged(object sender, EventArgs e)
        {
        }

        private void txtEmail_TextChanged(object sender, EventArgs e)
        {
        }

        private void txtUsuario_TextChanged(object sender, EventArgs e)
        {
        }

        private void txtSenha_TextChanged(object sender, EventArgs e)
        {
        }

        private void btnVoltar_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void btnCadastrar_Click(object sender, EventArgs e)
        {
            if (txtNome.Text != "(Nome)" && txtEndereco.Text != "(Endereco)" && txtTelefone.Text != "(Telefone)" && txtEmail.Text != "(E-mail)" && txtCPF.Text != "(CPF)" && txtUsuario.Text != "(Usuário)" && txtSenha.Text != "Passoword" && txtConfirma.Text != "Passoword")
            {
                if (txtSenha.Text == txtConfirma.Text)
                {
                    sql = string.Format("insert into vendedores values('{0}','{1}','{2}','{3}','{4}','{5}','{6}')", txtCPF.Text, txtNome.Text, txtEndereco.Text, txtTelefone.Text, txtEmail.Text, txtUsuario.Text, txtSenha.Text);
                    bd.AlterarTabelas(sql);
                    MessageBox.Show("Cadastro efetuado com sucesso!", "Cadastro", MessageBoxButtons.OK, MessageBoxIcon.Information);
                    this.Close();
                }
                else
                {
                    MessageBox.Show("Essas senhas não coincidem. Tentar novamente.", "Cadastro", MessageBoxButtons.OK, MessageBoxIcon.Error);
                }
                
            }
            else
            {
                MessageBox.Show("Preencha todos os campos corretamente.", "Cadastro", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void txtNome_Click(object sender, EventArgs e)
        {
            txtNome.Clear();
        }

        private void txtEndereco_Click(object sender, EventArgs e)
        {
            txtEndereco.Clear();
        }

        private void txtTelefone_Click(object sender, EventArgs e)
        {
            txtTelefone.Clear();
        }

        private void txtEmail_Click(object sender, EventArgs e)
        {
            txtEmail.Clear();
        }

        private void txtCPF_Click(object sender, EventArgs e)
        {
            txtCPF.Clear();
        }

        private void txtUsuario_Click(object sender, EventArgs e)
        {
            txtUsuario.Clear();
        }

        private void txtSenha_Click(object sender, EventArgs e)
        {
            txtSenha.Clear();
        }

        private void txtConfirma_Click(object sender, EventArgs e)
        {
            txtConfirma.Clear();
        }
    }
}
