Apache POI는 엑셀, 워드 등 Microsoft Office 파일을 다루기 위한 Java 라이브러리입니다. Apache POI 라이브러리에는 각 파일 형식에 대한 별도의 클래스 및 메소드들이 포함되어 있습니다. 아래는 주요한 Apache POI의 클래스 및 메소드들 중 엑셀 파일 다루기에 관련된 몇 가지를 정리해 보겠습니다.

### `Workbook` 인터페이스

- **createSheet(String sheetName):** 새로운 시트를 생성합니다.
    
    javaCopy code
    
    `Workbook workbook = new XSSFWorkbook(); Sheet sheet = workbook.createSheet("Sheet1");`
    
- **getSheetAt(int index):** 주어진 인덱스에 있는 시트를 가져옵니다.
    
    javaCopy code
    
    `Sheet sheet = workbook.getSheetAt(0);`
    
- **createRow(int rownum):** 주어진 행 번호에 새로운 행을 생성합니다.
    
    javaCopy code
    
    `Row row = sheet.createRow(0);`
    
- **getRow(int rownum):** 주어진 행 번호에 있는 행을 가져옵니다.
    
    javaCopy code
    
    `Row row = sheet.getRow(0);`
    

### `Sheet` 인터페이스

- **createCell(int columnIndex):** 주어진 열 번호에 있는 새로운 셀을 생성합니다.
    
    javaCopy code
    
    `Cell cell = row.createCell(0);`
    
- **getCell(int columnIndex):** 주어진 열 번호에 있는 셀을 가져옵니다.
    
    javaCopy code
    
    `Cell cell = row.getCell(0);`
    

### `Row` 인터페이스

- **createCell(int columnIndex):** 주어진 열 번호에 있는 새로운 셀을 생성합니다.
    
    javaCopy code
    
    `Cell cell = row.createCell(0);`
    
- **getCell(int columnIndex):** 주어진 열 번호에 있는 셀을 가져옵니다.
    
    javaCopy code
    
    `Cell cell = row.getCell(0);`
    

### `Cell` 인터페이스

- **setCellValue(double value):** 셀의 값을 숫자로 설정합니다.
    
    javaCopy code
    
    `cell.setCellValue(42.0);`
    
- **setCellValue(String value):** 셀의 값을 문자열로 설정합니다.
    
    javaCopy code
    
    `cell.setCellValue("Hello, World!");`
    
- **setCellValue(boolean value):** 셀의 값을 불리언으로 설정합니다.
    
    javaCopy code
    
    `cell.setCellValue(true);`
    

이 외에도 다양한 메소드들이 존재하며, 실제 사용 시에는 더 많은 기능을 사용할 수 있습니다. 엑셀 파일을 읽고 쓰는 다양한 작업을 수행할 때 필요한 메소드를 선택적으로 활용할 수 있습니다.