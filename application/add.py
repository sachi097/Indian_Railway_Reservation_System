import os,shutil
import sys
from PIL import Image
from resizeimage import resizeimage

name=sys.argv[1]
os.chdir("Uploads");
files=os.listdir()
for j in range(len(files)):
        if(files[j]==name):
            src=os.getcwd()+"/"+name
            break
os.chdir("..")
dst=os.getcwd()+"/watch.jpg"
shutil.move(src,dst)


with open(name, 'r+b') as f:
    with Image.open(f) as image:
        cover = resizeimage.resize_cover(image, [940, 470])
        cover.save('watch.jpg', image.format)


