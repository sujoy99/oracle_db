import cx_Oracle

try:
    PDBMIS="(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)(HOST = 180.211.137.17)(PORT = 1521))(CONNECT_DATA =(SERVER = DEDICATED)(SERVICE_NAME = ebps)))";

    conn = cx_Oracle.connect("PDBMIS", "pdbmis123", PDBMIS)

except:
    print('Exception occured while creating a connection ', err)

else:
    try:
        cur = conn.cursor()
        refCursor = conn.cursor()
        # cur.callproc('pet_manager.add_pet',keywordParameters={"pet_type_p": "fish", "name_p": "Roger", "owner_id_p": 1})

        P_BILL_CYCLE_CODE = 201912
        P_ZONE_CODE = "2"
        cur.callproc('DPG_MINISTRY_REPORT.DPD_ZONE_WISE',[refCursor, P_BILL_CYCLE_CODE, P_ZONE_CODE])
        # cur.callproc('DPG_MINISTRY_REPORT.DPD_ZONE_WISE',[(2, 6, refCursor), P_BILL_CYCLE_CODE, P_ZONE_CODE])
        # cur.callproc('DPG_MINISTRY_REPORT.DPD_MINISTRY_WISE',[refCursor, P_BILL_CYCLE_CODE])

        # print("hello")
        # print(type(refCursor))

        for row in refCursor:
            # print("Hello World")
            print(row)
        # print()
        # cur.callproc('DPG_MINISTRY_REPORT.DPD_ZONE_WISE',keywordParameters={"P_BILL_CYCLE_CODE": 201912, "P_ZONE_CODE": '%'})
        
        # $stid = oci_parse($conn, "begin DPG_MINISTRY_REPORT.DPD_ZONE_WISE(:cur_data,:P_BILL_CYCLE_CODE,:P_ZONE_CODE; end;");


        # pet_name = 'Roger'
        # owner_id = 1
        # pet_type = 'dog'
        # need_license = cur.var(str)
 
        # # add a new pet
        # new_pet_id = cur.callfunc('pet_manager.add_pet',list,[pet_name, owner_id, pet_type, need_license])
 
        # print ("New pet id: {}\nLicense needed: {}".format(new_pet_id, need_license.getvalue()))
        # cur.callproc("")
    except Exception as err:
        print('Exception raised while while executing the procedure ', err)

    else:
        print('Procedure Executed')
    finally:
        cur.close()
finally:
    conn.close()
