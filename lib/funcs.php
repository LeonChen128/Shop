<?php


//取得../$i資料夾路徑
function thisProjectPath($i) {
  $thisPhpPath = __File__;
  $paths = explode('/', $thisPhpPath);
  array_pop($paths);                         
  $thisProjectPath = implode('/', $paths);   
  return $thisProjectPath . '/' .  $i;
}
//取得$i副檔名
function extGet($i) {
  $name = explode('.', $i);
  return end($name);
}
//上傳檔案 postname, 資料夾, 新檔名
function upload($i, $j, $k) {
  if (is_uploaded_file($_FILES[$i]['tmp_name'])) {
    if (!file_exists(thisProjectPath($j))) {
      mkdir (thisProjectPath($j));
    }
  }
  $originalName = basename($_FILES[$i]['name']);
  $newName = thisProjectPath($j) . '/' . $k . '.' . extGet($originalName);
  if (move_uploaded_file($_FILES[$i]['tmp_name'], $newName)) {
    return '檔案上傳成功';
  }else {
    return '檔案上傳失敗';
  }
}
//連結資料庫 server, database, user, password
function linkMysql() {
  $a = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8';
  return new PDO($a, DB_USER, DB_PSWD);
}

function noticeTable($message) {
  echo '<div class="noticeMessage">';
  echo '<div class="noticeHeader">訊息</div>';
  echo '<spanl class="noticeWord">' . $message . '</spanl>';
  echo '</div>';
}

function noticeTableMaster($message) {
  echo '<div class="noticeMessage">';
  echo '<div class="noticeHeaderMaster">訊息</div>';
  echo '<spanl class="noticeWord">' . $message . '</spanl>';
  echo '</div>';
}
  












