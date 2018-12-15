x=0
while [ $x -lt 110 ]
do
        echo -e "\e[0$x;1m unyil $x \e[0m"
        x=$(($x + 1))
done
