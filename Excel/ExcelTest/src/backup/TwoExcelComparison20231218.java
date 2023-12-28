package backup;

import java.io.FileInputStream;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;

import org.apache.poi.ss.usermodel.CellType;
import org.apache.poi.ss.usermodel.Sheet;
import org.apache.poi.ss.usermodel.Workbook;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;

public class TwoExcelComparison20231218 {

	public static void main(String[] args) {
		String fileName1 = "동성초.xlsx";
		String fileName2 = "사본리스트.xlsx";
		try(FileInputStream fileInputStream1 = new FileInputStream(fileName1);
			FileInputStream fileInputStream2 = new FileInputStream(fileName2);
			Workbook school = new XSSFWorkbook(fileInputStream1);
			Workbook alllist = new XSSFWorkbook(fileInputStream2);	){
			
			Sheet ss = school.getSheetAt(0);
			Sheet ls = alllist.getSheetAt(0);
			HashMap<String, Integer> map = new HashMap<>();
			List<Integer> list = new ArrayList<>();
			int sw = 0;
			for(int i=1;i<ss.getLastRowNum()+1;i++) {
				//System.out.println(ss.getRow(i).getCell(1));
				for(int j=2;j<ls.getLastRowNum()+1;j++) {
					if(ls.getRow(j).getCell(9)==null)continue;
					if(ls.getRow(j).getCell(9).toString().contains(ss.getRow(i).getCell(1).toString())) {
						sw=1;
						System.out.println(ss.getRow(i).getCell(1).toString());
						System.out.println(ls.getRow(j).getCell(9).toString());
//						System.out.println("--------------------------------");
						if(ls.getRow(j).getCell(8).getCellType() == CellType.NUMERIC) {
						list.add((int)ls.getRow(j).getCell(8).getNumericCellValue());
						//System.out.println(ls.getRow(i).getCell(9));
						}else {
//							System.out.println(ls.getRow(i).getCell(8).getCellType());
							System.out.println(ls.getRow(j).getCell(8));
							list.add(00000);
						}
						break;
					}else {
						sw=0;
						//list.add(00000);
					}
				}
				if(sw==0) {
					System.out.println(ss.getRow(i).getCell(1).toString());
					System.out.println("-결과없음--------------------------");
					list.add(00000);
				}
			}
			System.out.println("test");
			for(Integer data : list)System.out.println(data);
			System.out.println("end test");
		} catch (Exception e) {
			System.out.println("error : "+e);
		}
	}

}
