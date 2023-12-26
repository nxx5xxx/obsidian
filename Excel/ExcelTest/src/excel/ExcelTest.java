package excel;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.util.Map;
import java.util.Set;
import java.util.TreeMap;

import org.apache.poi.xssf.usermodel.XSSFCell;
import org.apache.poi.xssf.usermodel.XSSFRow;
import org.apache.poi.xssf.usermodel.XSSFSheet;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;
public class ExcelTest {

    public static void main(String[] args) {
        // 빈 워크북 생성
        Workbook workbook = new XSSFWorkbook();

        // 시트 생성
        Sheet sheet = workbook.createSheet("MySheet");

        // 행 생성
        Row row = sheet.createRow(0);

        // 셀 생성 및 값 설정
        Cell cell = row.createCell(0);
        cell.setCellValue("Hello");

        // 파일에 쓰기
        try (FileOutputStream fileOut = new FileOutputStream("workbook.xlsx")) {
            workbook.write(fileOut);
            System.out.println("Excel 파일이 생성되었습니다.");
        } catch (IOException e) {
            e.printStackTrace();
        } finally {
            // 워크북 닫기
            try {
                workbook.close();
            } catch (IOException e) {
                e.printStackTrace();
            }
        }
    }

}


