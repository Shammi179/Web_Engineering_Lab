function demo(){
    var result = document.getElementById("result");


    var dateTime = new Date();
    var hours = dateTime.getHours();
    var minutes = dateTime.getMinutes();
    var seconds = dateTime.getSeconds();

    var watch = hours+" : "+minutes+" : "+seconds;
    result.innerHTML = watch;


}
setInterval(demo,1000);