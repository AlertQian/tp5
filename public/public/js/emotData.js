var emotData = [
  {'id':'1','alt':'微笑','format':'gif'},
  {'id':'2','alt':'撇嘴','format':'gif'},
  {'id':'3','alt':'色','format':'gif'},
  {'id':'4','alt':'发呆','format':'gif'},
  {'id':'5','alt':'得意','format':'gif'},
  {'id':'6','alt':'流泪','format':'gif'},
  {'id':'7','alt':'害羞','format':'gif'},
  {'id':'8','alt':'闭嘴','format':'gif'},
  {'id':'9','alt':'睡','format':'gif'},
  {'id':'10','alt':'大哭','format':'gif'},
  {'id':'11','alt':'尴尬','format':'gif'},
  {'id':'12','alt':'发怒','format':'gif'},
  {'id':'13','alt':'调皮','format':'gif'},
  {'id':'14','alt':'呲牙','format':'gif'},
  {'id':'15','alt':'惊讶','format':'gif'},
  {'id':'16','alt':'难过','format':'gif'},
  {'id':'17','alt':'酷','format':'gif'},
  {'id':'18','alt':'冷汗','format':'gif'},
  {'id':'19','alt':'抓狂','format':'gif'},
  {'id':'20','alt':'吐','format':'gif'},
  {'id':'21','alt':'偷笑','format':'gif'},
  {'id':'22','alt':'发怒','format':'gif'},
  {'id':'23','alt':'调皮','format':'gif'},
  {'id':'24','alt':'呲牙','format':'gif'},
  {'id':'25','alt':'惊讶','format':'gif'},
  {'id':'26','alt':'难过','format':'gif'},
  {'id':'27','alt':'酷','format':'gif'},
  {'id':'28','alt':'冷汗','format':'gif'},
  {'id':'29','alt':'抓狂','format':'gif'},
  {'id':'30','alt':'吐','format':'gif'},
  {'id':'31','alt':'微笑','format':'gif'},
  {'id':'32','alt':'撇嘴','format':'gif'},
  {'id':'33','alt':'色','format':'gif'},
  {'id':'34','alt':'发呆','format':'gif'},
  {'id':'35','alt':'得意','format':'gif'},
  {'id':'36','alt':'流泪','format':'gif'},
  {'id':'37','alt':'害羞','format':'gif'},
  {'id':'38','alt':'闭嘴','format':'gif'},
  {'id':'39','alt':'睡','format':'gif'},
  {'id':'40','alt':'大哭','format':'gif'},
  {'id':'41','alt':'尴尬','format':'gif'},
  {'id':'42','alt':'发怒','format':'gif'},
  {'id':'43','alt':'调皮','format':'gif'},
  {'id':'44','alt':'呲牙','format':'gif'},
  {'id':'45','alt':'惊讶','format':'gif'},
  {'id':'46','alt':'难过','format':'gif'},
  {'id':'47','alt':'酷','format':'gif'},
  {'id':'48','alt':'冷汗','format':'gif'},
  {'id':'49','alt':'抓狂','format':'gif'},
  {'id':'50','alt':'吐','format':'gif'},
  {'id':'51','alt':'偷笑','format':'gif'},
  {'id':'52','alt':'发怒','format':'gif'},
  {'id':'53','alt':'调皮','format':'gif'},
  {'id':'54','alt':'呲牙','format':'gif'},
  {'id':'55','alt':'惊讶','format':'gif'},
  {'id':'56','alt':'难过','format':'gif'},
  {'id':'57','alt':'酷','format':'gif'},
  {'id':'58','alt':'冷汗','format':'gif'},
  {'id':'59','alt':'抓狂','format':'gif'},
  {'id':'60','alt':'吐','format':'gif'},
  {'id':'61','alt':'偷笑','format':'gif'},
  {'id':'62','alt':'发怒','format':'gif'},
  {'id':'63','alt':'调皮','format':'gif'},
  {'id':'64','alt':'呲牙','format':'gif'},
  {'id':'65','alt':'惊讶','format':'gif'},
  {'id':'66','alt':'难过','format':'gif'},
  {'id':'67','alt':'酷','format':'gif'},
  {'id':'68','alt':'冷汗','format':'gif'},
  {'id':'69','alt':'抓狂','format':'gif'},
  {'id':'70','alt':'吐','format':'gif'}
];
function insertAtCaret(o,sid,src){
  var target_node = $('#'+sid)[0];
  var text = '<img src="'+src+'" width="24" height="24" />';
  if (document.selection) {
    target_node.focus();
    var cr = document.selection.createRange();
    cr.pasteHTML(text);
    cr.collapse();
    cr.select();
  }else if (window.getSelection()) {
    target_node.innerHTML=target_node.innerHTML+text;
  }else{
    target_node.innerHTML=target_node.innerHTML + text;
  }
  return false;
}
function loadEmot(forid){
  var iNode = document.createElement('div');
  iNode.className = 'clearfix';
  var strFace = '<ul class="clearfix ul_0">';
  var i=0,k=0,len=emotData.length,path='/wap/main/arclist/',sourceImgsrc='',imgsrc=path+'24x24tranparent.gif';
  for( ;i<len;i++){
    sourceImgsrc = path+emotData[i].id+'.gif';
    strFace += '<li><a href="#" class="itemEmot" onclick="return insertAtCaret(this,\''+forid+'\',\''+sourceImgsrc+'\');" data-src="'+sourceImgsrc+'" data-alt="'+emotData[i].alt+'"><img src="'+sourceImgsrc+'" alt="" /></a></li>';
  }
  strFace += '</ul>';
  setTimeout(function(){
    iNode.innerHTML = strFace;
    $('#emot_inner').append(iNode);
  },100);
  
}
loadEmot('cmt_txt');