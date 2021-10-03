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
    public partial class frmMenu : Form
    {

        int panelWidth;
        bool isCollapsed;

        public frmMenu()
        {
            InitializeComponent();

            panelWidth = panelLeft.Width;
            isCollapsed = false;
            uclMenuu uclm = new uclMenuu();
            AddControlsToPanel(uclm);

            SidePanel.Height = btnMenu.Height;
            SidePanel.Top = btnMenu.Top;
        }

        Login objLogin = new Login();

        private void frmMenu_Load(object sender, EventArgs e)
        {
            lblNome.Text = "" + objLogin.UsuarioLogado();
            lblCPF.Text = "" + objLogin.CPFUsuario();
        }

        private void BtnProdutos_Click(object sender, EventArgs e)
        {
            SidePanel.Height = btnProdutos.Height;
            SidePanel.Top = btnProdutos.Top;

            uclProduto2 uclp = new uclProduto2();
            AddControlsToPanel(uclp);
        }


        //edit
        private void AddControlsToPanel(Control c)
        {
            c.Dock = DockStyle.Fill;
            panelControls.Controls.Clear();
            panelControls.Controls.Add(c);
        }

        private void btnMenu_Click(object sender, EventArgs e)
        {
            SidePanel.Height = btnMenu.Height;
            SidePanel.Top = btnMenu.Top;

            uclMenuu uclm = new uclMenuu();
            AddControlsToPanel(uclm);
        }

        private void btnEstoque_Click(object sender, EventArgs e)
        {
            SidePanel.Height = btnEstoque.Height;
            SidePanel.Top = btnEstoque.Top;

            uclEstoque ucle = new uclEstoque();
            AddControlsToPanel(ucle);
        }

        private void btnVendas_Click(object sender, EventArgs e)
        {
            SidePanel.Height = btnVendas.Height;
            SidePanel.Top = btnVendas.Top;

            uclVendas ucle = new uclVendas();
            AddControlsToPanel(ucle);
        }

        private void btnSair_Click(object sender, EventArgs e)
        {
            //Pergunta/ Titulo/ Botoes/ Icone
            if (MessageBox.Show("Deseja deslogar do sistema? ", "Agronomigs", MessageBoxButtons.YesNo, MessageBoxIcon.Question) == DialogResult.Yes)
            {
                //Fechar a aplicação
                this.Close();
            }
        }

        private void btnMinimizar_Click(object sender, EventArgs e)
        {
            this.WindowState = FormWindowState.Minimized;
        }

        //NOVOOOOOOOOOO
        private void timer1_Tick(object sender, EventArgs e)
        {
            if (isCollapsed)
            {
                panelLeft.Width = panelLeft.Width + 10;
                if (panelLeft.Width >= panelWidth)
                {
                    timer1.Stop();
                    isCollapsed = false;
                    this.Refresh();
                }
            }
            else
            {
                panelLeft.Width = panelLeft.Width - 10;
                if (panelLeft.Width <= 59)
                {
                    timer1.Stop();
                    isCollapsed = true;
                    this.Refresh();
                }
            }
        }

        private void btnInsta_Click(object sender, EventArgs e)
        {
            System.Diagnostics.Process.Start("https://www.instagram.com/agronomig_/");
        }
    }
}
