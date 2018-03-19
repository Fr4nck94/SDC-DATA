n=0
for file in `ls ./Step1/`; do
    var=$file".json"
    if [ ! -d /Step2 ] && mkdir -p Step2
       then
	   php conv_txt_json.php ./Step1/$file > ./Step2/$var
           n=$((n+1))
           echo $n
    fi
done
