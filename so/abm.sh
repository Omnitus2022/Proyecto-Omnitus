echo "1- Agregar usuario"

echo "2- Asignar contrase�a"

echo "3- Eliminar usuario"

echo "4- Crear grupo"

echo "5- Eliminar grupo"

echo "6- Agregar usuario a grupo"

echo "7- Eliminar usuario de un grupo"

echo "8- Salir"

read op

case $op in

1)
    clear

    read -p "Ingrese el nombre de usuario: " user

    clear

    useradd -m $user

    clear
    ;;

\
    2)
    clear

    read -p "Usuario al que le quiere asignar contrase�a : " user

    clear

    passwd $user
    ;;

\
    3)
    clear

    read -p "Ingrese el usuario que quiere eliminar: " user

    userdel $user
    ;;

\
    4)
    clear

    read -p "Ingrese el nombre del grupo que quiere crear: " group

    clear

    groupadd $group
    ;;

\
    5)
    clear

    read -p "Ingrese el nombre del grupo que quiere eliminar: " group

    clear

    groupdel $group
    ;;

\
    6)
    clear

    read -p "Usuario que quiere agregar al grupo: " user
    clear

    read -p "Nombre del grupo: " group

    clear

    gpasswd -a $user $group
    ;;

\
    7)
    clear

    read -p "Usuario que quiere eliminar al grupo: " user

    clear

    read -p "Nombre del grupo: " group

    clear

    gpasswd -d $user $group
    ;;

\
    8)
    exit
    clear
    ;;
esac

sh abm.sh
