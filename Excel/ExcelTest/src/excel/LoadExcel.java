package excel;

import java.io.FileInputStream;
import java.io.IOException;
import java.util.Scanner;

import org.apache.poi.ss.usermodel.Cell;
import org.apache.poi.ss.usermodel.Row;
import org.apache.poi.ss.usermodel.Sheet;
import org.apache.poi.ss.usermodel.Workbook;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;

import org.apache.poi.ss.usermodel.CellType;

public class LoadExcel {
	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		System.out.println("파일명을 입력해주세요");
		String fileName = sc.nextLine() + ".xlsx";
		try (FileInputStream fileInputStream = new FileInputStream(fileName);
				Workbook workbook = new XSSFWorkbook(fileInputStream)) {

			// 시트 선택 (첫 번째 시트를 선택합니다.)
			Sheet sheet = workbook.getSheetAt(0);
			// 모든 행 반복
//           for (Row row : sheet) {
//               // 행의 모든 셀 반복
//               for (Cell cell : row) {
//                   // 셀의 내용을 출력
//                   System.out.print(cell + "\t");
//               }
//               // 행이 끝날 때마다 개행
//               System.out.println();
//           }
			// sheet.getRow(1).getCell(1);
			System.out.println("테스");
			// row는 1부터시작 cell은 0부터시작
			// 제목칼럼은 9부터
			// row 의 개수를 알수있는메소드 getLastRowNum 해당 메소드는 0부터시작하므로 +1을해줘야함 
			for(int i=0;i<sheet.getLastRowNum()+1;i++) {
				//System.out.println(sheet.getRow(i).getCell(8));
				if(sheet.getRow(i).getCell(8).getCellType() == CellType.NUMERIC) {
				System.out.println((int)sheet.getRow(i).getCell(8).getNumericCellValue());
				}
			}
		// 모든셀을 불러온후 미리 객체에 저장하는게 빠를거같은데 
		} catch (IOException e) {
			e.printStackTrace();
		}
		sc.close();
	}
}
