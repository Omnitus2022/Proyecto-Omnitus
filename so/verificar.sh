currentuser=$(whoami)
if [ "$currentuser" = "root" ];
then

exitm
else
echo "Se requiere ser root para ejecutar este shell script"
echo "Puede ejecutar el comando 'sudo su' para cambiar a root"
sleep 3
sh verificar.sh
fi 
