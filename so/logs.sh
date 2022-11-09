opciones () {
clear
echo "1 - Usuarios conectados"
echo "2 - Usuarios que estuvieron conectados"
echo "3 - Intentos fallidos"
echo "4 - Alertas"
echo "5 - Salir"

read -p "Seleccione opción: " selec
case $selec in

    1)  clear
        who
        sleep 3
        opciones;;

    2)  clear
        last
        sleep 3
        opciones;;
    
    3)  clear
        last
        sleep 3
        opciones;;
    
    4)  clear
        dmesg
        sleep 3
        opciones;;

    5)  clear
        exit;;
        
esac
}
opciones