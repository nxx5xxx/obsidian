package excel;

import java.io.FileInputStream;
import java.io.IOException;
import java.util.Scanner;

import org.apache.poi.ss.usermodel.Cell;
import org.apache.poi.ss.usermodel.Row;
import org.apache.poi.ss.usermodel.Sheet;
import org.apache.poi.ss.usermodel.Workbook;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;

public class LoadExcel {
    public static void main(String[] args) {
    	Scanner sc = new Scanner(System.in);
    	System.out.println("파일명을 입력해주세요");
    	String fileName = sc.nextLine()+".xlsx";
    try (FileInputStream fileInputStream = new FileInputStream(fileName);
            Workbook workbook = new XSSFWorkbook(fileInputStream)) {

           // 시트 선택 (첫 번째 시트를 선택합니다.)
           Sheet sheet = workbook.getSheetAt(0);

           // 모든 행 반복
           for (Row row : sheet) {
               // 행의 모든 셀 반복
               for (Cell cell : row) {
                   // 셀의 내용을 출력
                   System.out.print(cell + "\t");
               }
               // 행이 끝날 때마다 개행
               System.out.println();
           }

       } catch (IOException e) {
           e.printStackTrace();
       }
   }
}
