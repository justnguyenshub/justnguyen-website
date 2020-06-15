function handleShowForm(type){
    var hide = document.getElementById("hide-form");
    var topic = document.getElementById("po_topic");
    var summ = document.getElementById("po_summ");
    var content = document.getElementById("content");
    var embed = document.getElementById("po_embed");

    hide.style.display = "block";
    summ.style.display = "block";
    topic.style.display = "block";
    content.style.display = "block";
    embed.style.display = "none";
    
    if(type == 2){
        topic.style.display = "none";
    }
    else if(type == 3 || type == 4){
        summ.style.display = "none";
        topic.style.display = "none";
    }
    else if(type == 5){
        topic.style.display = "none";
        summ.style.display = "none";
        content.style.display = "none";
        embed.style.display = "block";
    }
}