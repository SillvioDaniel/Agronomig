using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;

namespace trab_agronomig
{
    class Login
    {

        private static string nome, cpf;

        public bool ValidarLogin(string usuario, string senha)
        {
            ConexaoBD bd = new ConexaoBD();
            string sql = string.Format("select * from vendedores where usuario = '{0}' and senha = '{1}'", usuario, senha);
            DataTable dt = new DataTable();
            dt = bd.ConsultarTabela(sql);

            if (dt.Rows.Count > 0)
            {
                cpf = dt.Rows[0]["cpf"].ToString();
                nome = dt.Rows[0]["nome"].ToString();
                return true;
            }
            else
            {
                return false;
            }
        }

        public string UsuarioLogado()
        {
            return nome;
        }

        public string CPFUsuario()
        {
            return cpf;
        }

    }
}
