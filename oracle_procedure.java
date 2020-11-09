package package_procedure;

import java.sql.CallableStatement;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;

import oracle.jdbc.OracleCallableStatement;
import oracle.jdbc.OracleTypes;

public class ProcedureTest {
	
	public static void main(String[] args) throws Exception {
		DriverManager.registerDriver (new oracle.jdbc.OracleDriver());
		
	      Connection conn = DriverManager.getConnection("jdbc:oracle:thin:@180.211.137.17:1521/ebps","PDBMIS", "pdbmis123");
	      
//	      "begin DPG_MINISTRY_REPORT.DPD_ZONE_WISE(:cur_data,:P_BILL_CYCLE_CODE,:P_ZONE_CODE); end;"
	      
//	      CallableStatement stmt = conn.prepareCall("BEGIN get_emp_rs(?, ?); END;");
	      
//	      $P_BILL_CYCLE_CODE = '201912';
//	      $P_ZONE_CODE = '2';
	      
	      CallableStatement stmt = conn.prepareCall("BEGIN DPG_MINISTRY_REPORT.DPD_ZONE_WISE(?, ?, ?); END;");
	      
//	      stmt.setInt(1, 30); // DEPTNO
//	      stmt.setInt(1, "201912");
	      stmt.setString(2, "201912");
	      stmt.setString(3, "2");
	      
	      stmt.registerOutParameter(1, OracleTypes.CURSOR); //REF CURSOR
	      
	      stmt.execute();
	      
	      ResultSet rs = ((OracleCallableStatement)stmt).getCursor(1);
	      
	      while (rs.next()) {
	        System.out.println(rs.getString("ZONE_NAME") + ":" + rs.getString("MINISTRY")); 
	      }
	      
	      rs.close();
	      
	      rs = null;
	      
	      stmt.close();
	      
	      stmt = null;
	      
	      conn.close();
	      
	      conn = null;
	}
	
		   

		  
		
}
