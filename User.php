<?php
/* START COLOR */
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m"; 
$lblue2="\033[1;36m";
/* END COLOR */
$banner = "\033[1;36m●━━━━●━━━━●━━━━●━━━━●━━━━●━━━━●━━━━●━━━━●━━━━●━━━━●━━━━●\n
\033[0;31m
████████╗███████╗ █████╗ ███╗   ███╗     █████╗ 
╚══██╔══╝██╔════╝██╔══██╗████╗ ████║    ██╔══██╗
\033[1;33m   ██║   █████╗  ███████║██╔████╔██║    ╚█████╔╝
   ██║   ██╔══╝  ██╔══██║██║╚██╔╝██║    ██╔══██╗
\033[1;32m   ██║   ███████╗██║  ██║██║ ╚═╝ ██║    ╚█████╔╝
   ╚═╝   ╚══════╝╚═╝  ╚═╝╚═╝     ╚═╝     ╚════╝ 
                                                                                                                                                                                                                            
\033[1;36m●━━━━●━━━━●━━━━●━━━━●━━━━●━━━━●━━━━●━━━━●━━━━●━━━━●━━━━●━━━━
\033[1;33mCreator : Tim Ninja             Chanel YT : Family Vlll
Support : Member Family Vlll    Grup Tele : @jancokkau990
\033[1;36m●━━━━●━━━━●━━━━●━━━━●━━━━●━━━━●━━━━●━━━━●━━━━●━━━━●━━━━●━━━━\n";
echo $banner;
echo "link password : https://gtahd.com/gQtE";
echo$putih."
    ☟☟☟☟☟☟".$red." Harap".$ijo." Masukkan".$kuning." Password".$biru." Di Bawah".$putih." ☟☟☟☟☟☟\n".$r;
$pass=file_get_contents("https://pastebin.com/raw/zxiDj8AA");
$pasw=readline("\033[1;36mMasukkan Password  => $yellow");
   if($pasw==$pass){
ob_start();
exec("termux-open-url https://www.youtube.com/channel/UCv7osfXR7laNWJ_Xi1IN8xw");
ob_end_clean();

@system("clear");
 }
  elseif($pasw==""){
echo$red."

\t 🖕🏻Paswordnya Di isi \n";
exit;
}
 elseif($pasw!==$pass){
echo$red2."\t ❌Pasword Salah❌ \n\n";

exit;
}
echo $banner;


