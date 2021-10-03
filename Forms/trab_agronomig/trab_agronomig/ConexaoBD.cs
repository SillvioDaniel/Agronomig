using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using System.Data;
using MySql.Data.MySqlClient;

namespace trab_agronomig
{
    class ConexaoBD
    {
        MySqlConnection con;

        //String Conexão de Banco de Dados
        public void ConectarBd()
        {
            try
            {
                con = new MySqlConnection("Persist Security info=false;server=localhost;database=trab_agronomig;user=root;pwd=;");
                con.Open();
            }
            catch (Exception)
            {
                throw;
            }
        }

        //insert, delete, update
        public int AlterarTabelas(string sql)
        {
            try
            {
                ConectarBd();
                MySqlCommand cmd = new MySqlCommand(sql, con);
                return cmd.ExecuteNonQuery();
            }
            catch (Exception)
            {
                throw;
            }
            finally
            {
                con.Close();
            }
        }

        //select
        public DataTable ConsultarTabela(string sql)
        {
            try
            {
                ConectarBd();
                MySqlDataAdapter da = new MySqlDataAdapter(sql, con);
                DataTable dt = new DataTable();
                da.Fill(dt);
                return dt;
            }
            catch (Exception)
            {
                throw;
            }
            finally
            {
                con.Close();
            }
        }
    }
}
