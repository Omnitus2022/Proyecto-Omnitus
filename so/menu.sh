menu() {
    clear
    echo "1 - Menú ABM"
    echo "2 - Respaldo BD"
    echo "3 - Menú de Logs"
    echo "4 - Seguridad"
    echo "5 - Salir"
    read op
    case $op in

    1)
        sh abm.sh
        menu
        ;;

    2)
        clear
        mysqldump -u $usu -p $bd >$archivo
        echo "esto es un espacio para la base de datos"
        sleep 2
        menu
        ;;

    3)
        clear
        sh logs.sh
        sleep 2
        menu
        ;;

    4)
        clear echo "la seguridad"
        sleep 2
        menu
        ;;

    5)
        exit
        ;;

    esac
}
clear
currentuser=$(whoami)
if [ "$currentuser" = "root" ]; then
    sleep 1
    bd = Omnitus2022
    archivo = archivo.sql
    menu
else
    echo "Se requiere ser root para ejecutar este shell script"
    echo "Puede ejecutar el comando 'su' para cambiar a root"
fi
