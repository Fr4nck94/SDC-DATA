n=0
for file in `ls ../MillionSongSubset/allh5/`; do
    var=$file".txt"
    if [ ! -d /Step1 ] && mkdir -p Step1
    then
	python ./display_song.py ../MillionSongSubset/allh5/$file > ./Step1/$file.txt
	n=$((n+1))
	echo $n
    fi
done
