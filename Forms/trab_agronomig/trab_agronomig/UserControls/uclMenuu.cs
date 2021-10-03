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
    public partial class uclMenuu : UserControl
    {
        public uclMenuu()
        {
            InitializeComponent();
        }
        ConexaoBD bd = new ConexaoBD();
        string sql,cpf,cod;
        Login objLogin = new Login();
       
        private void uclMenuu_Load(object sender, EventArgs e)
        {
            string soma = "",quant ="",maior ="";
            cpf = "" + objLogin.CPFUsuario();
            DataTable dt = new DataTable();

            
            sql = string.Format("Select sum(total) from venda where vendedores_cpf = '{0}'", cpf);
            dt = bd.ConsultarTabela(sql);
            dtgsoma.DataSource = dt;
            if (dt.Rows.Count > 0)
            {
                soma = dt.Rows[0]["sum(total)"].ToString();

            }


            sql = string.Format("Select count(*) from venda where vendedores_cpf = '{0}'", cpf);
            dt = bd.ConsultarTabela(sql);
            dtgquant.DataSource = dt;
            if (dt.Rows.Count > 0)
            {
                quant = dt.Rows[0]["count(*)"].ToString();

            }


            sql = string.Format("Select max(total) from venda where vendedores_cpf = '{0}'", cpf);
            dt = bd.ConsultarTabela(sql);
            dtgmaior.DataSource = dt;
            if (dt.Rows.Count > 0)
            {
                maior = dt.Rows[0]["max(total)"].ToString();

            }


            lblTotal.Text = "R$ "+soma;
            lblQuantVendas.Text = quant ;
            lblMaior.Text = "R$ " + maior;

            if (lblMaior.Text == "")
            {
                lblMaior.Text = "0";
            }

            if (lblTotal.Text == "")
            {
                lblTotal.Text = "0";
            }

            if (lblQuantVendas.Text == "")
            {
                lblQuantVendas.Text = "0";
            }
        }
    }
}
