
<!DOCTYPE>

<html>

<head>
  <meta http-equiv="content-type" content="text/html" charset="utf-8">
  <meta name="viewport" content="width=device-width", initial-scale="1">
<link rel="stylesheet" href="css/bootstrap.min.css">
  <title>우편 확인프로그램</title>
</head>
<body>
<nav class =" navbar navbar-default">
  <div class="navbar=header">
    <button type="button"class="navbar-toggle collapsed"
    data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
    aria-expanded="false">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand"href="loginAction.php">우편함 게시판</a>
  </div>
  <div class="collape navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="nav navbar-nav">
        <li><a href="main.php">메인</a></li>
        <li><a href="board.php">게시판</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"
      role="button" aria-haspopup="true"
        aria-expanded="false">접속하기<span class="caret"></span></a>
        <ul class="dropdown-menu">

          <li> <a href="logout.php">로그아웃</a></li>
        </ul>
      </li>
    </ul>
  </div>

</nav>
<div class="container">
  <div class="row">
  <table class="table table-striped"  style="text-align: center; border: 1px solid #dddddd">
<thead>
  <tr>
    <th style="background-color:#eeeeee; text-align: center;">우편이름</th>
      <th style="background-color:#eeeeee; text-align: center;">종류</th>
        <th style="background-color:#eeeeee; text-align: center;">발신인</th>
          <th style="background-color:#eeeeee; text-align: center;">송신자</th>
            <th style="background-color:#eeeeee; text-align: center;">수신자</th>
              <th style="background-color:#eeeeee; text-align: center;">주소</th>
  </tr>
</thead>
<tbody>
  <td></td>
</tbody>
  <tr>
    <td>카드명세서</td>
  <td>일반</td>
    <td>2019-12-10</td>
    <td>김태희</td>
    <td>김동현</td>

        <td>군산대학교 기숙사</td>

  </tr>
  <tr>
    <td>카드명세서</td>
    <td>일반</td>
    <td>2019-12-15</td>
    <td>김태희</td>
    <td>김동현</td>

        <td>군산대학교 기숙사</td>

  </tr>
  <tr>
    <td>성적표</td>

    <td>등기</td>
      <td>2019-10-08</td>
    <td>마동석</td>
    <td>김민희</td>
      <td>군산대학교 기숙사</td>

  </tr>
  <tr>
    <td>전기세</td>
    <td>특급</td>
    <td>2019-08-18</td>
    <td>마동석</td>
    <td>김민희</td>

        <td>군산대학교 기숙사</td>
  </tr>
  <tr>
    <td>카드명세서</td>
    <td>국제</td>
    <td>2019-08-10</td>
    <td>마동석</td>
    <td>김민희</td>

        <td>군산대학교 기숙사</td>

  </tr>
  <tr>
    <td>도시가스</td>
    <td>특급</td>
    <td>2019-12-31</td>
    <td>황호순</td>
    <td>지현이</td>
        <td>군산대학교 기숙사</td>
      </tr>
        <tr>
          <td>도시가스</td>
          <td>국제</td>
          <td>2019-09-15</td>
          <td>김동현</td>
          <td>황지훈</td>
              <td>군산대학교 기숙사</td>

        </tr>

</tbody>
  </table>
<a href="board.php" class="btn btn-primary pull-left">이전페이지</a>

</div>
</div>


<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>
