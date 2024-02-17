<?php
$pdo = new PDO('mysql:host=192.168.10.10; dbname=test; charset=utf8', 'hyunsoo', '123456'); // 데이터 베이스 접속
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// PDO 객체의 setAttribute() 메서드를 호출해 오류 처리 방식을 지정한다.
// PDO 객체으 오류 처리방식을(PDO::ATTR_ERRMODE) 예외발생(PDO::ERRMODE_EXCEPTION)으로 설정한다
?>

<?php
// 데이터 베이스 접속 및 테이블 생성 (1단계)
// try {
//   $pdo = new PDO('mysql:host=localhost; dbname=ijdb; charset=utf8', 'ijdbuser', '123456');
//   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//   $sql = 'CREATE TABLE joke (
//         id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//         joketext TEXT,
//         jokedate DATE NOT NULL
//         ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';
//   $pdo -> exec($sql);

//   $sql2 = 'SELECT `joketext` FROM `joke`';
//   $result = $pdo->query($sql2);

//   $output = '데이터 베이스 접속 후 테이블 생성 성공';
// } catch (PDOException $e) {
//   $output = "데이터 베이스 서버에 접속할 수 없습니다: ".
//   $e->getMessage() . ', 위치: '.
//   $e->getFile(). ':'. $e->getLine();
// }
?>
<?php
//데이터 베이스 접속 및 값 가져오기
// try {
//   $pdo = new PDO('mysql:host=localhost; dbname=ijdb; charset=utf8', 'ijdbuser', '123456');
//   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//   $sql = 'SELECT `joke`.`id`, `joketext`, `name`, `email` FROM `joke` INNER JOIN `author` ON `authorid` = `author`.`id`';
//   $jokes = $pdo->query($sql);

//   $title = '유머글 목록';
//   ob_start();
//   include __DIR__ . '/../templates/jokes.html.php';

//   $output = '데이터 베이스 접속 후 테이블 생성 성공';
// } catch (PDOException $e) {
//   $output = "데이터 베이스 서버에 접속할 수 없습니다: ".
//   $e->getMessage() . ', 위치: '.
//   $e->getFile(). ':'. $e->getLine();
// }

// query() vs. exec()
//
// query의 경우 리턴값이 존재해야하는 쿼리에 사용된다.
//
// 즉, 쿼리를 날리고 리턴값을 통해 뭔가를 반환받아서 사용해야하는 쿼리에 사용된다는 말이다
//
// 대표적으로 SELECT문에 사용된다.
//
// (query를 사용하면 PDOStatement Object가 반환됨)
//
//
//
// exec의 경우 리턴값이 필요없는 쿼리에 사용된다.
//
// DELETE와 같이 삭제하는 쿼리는 리턴값이 필요없으므로
//
// exec이 적절하다.
//
//
//
// 출처: https://www.hides.kr/655 [Hide]
// -->
// <!--
// *prepare() 와 execute()
//
// $db->exec("INSERT INTO table1 (id, password) VALUES ('$_POST[id]', '$_POST[pw]')");
// //위의 SQL구문은 아주 위험하다.
//
// //따라서 prepare()와 execute()를 활용해서 prepared statements를 사용해야된다.
// $stmt = $db->prepare('INSERT INTO table1 (id, password) VALUES (?,?)');
// $stmt->execute(array($_POST['id'],$_POST['pw']));
// or
// $stmt = $db->prepare('INSERT INTO table1 (id, password) VALUES (?,?)');
// $stmt->bindValue($_POST['id'], $_POST['pw']);
// $stmt->execute();
