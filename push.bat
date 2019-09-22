git add .
set /P commit="Enter commit: "
git commit -m ". %commit%"
git push
