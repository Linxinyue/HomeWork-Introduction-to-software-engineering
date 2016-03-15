
var Ajax = function Ajax(url)
{
	var m_xmlReq=null;
	if(window.ActiveXObject)
	{
	    try 
	    {
	        m_xmlReq = new ActiveXObject('Msxml2.XMLHTTP'); 
	    }
	    catch(e)
	    {
	        try{m_xmlReq = new ActiveXObject('Microsoft.XMLHTTP');}catch(e){}
	    }
	}
	else if(window.XMLHttpRequest)
	{
	    m_xmlReq = new XMLHttpRequest();
	}
	
	this.postResult=function(d)
	{
	    if(!m_xmlReq)  return;
	    m_xmlReq.open('POST',url,false);
	    m_xmlReq.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded;charset=utf-8');
	    m_xmlReq.send(d);	
	    var requesttxt=m_xmlReq.responseText;	    
	    return requesttxt;
	}
    this.getResult=function()
	{
	    if(!m_xmlReq)  return;
	    m_xmlReq.open('GET',url,false);
	    m_xmlReq.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded;charset=utf-8');
	    m_xmlReq.send(null);	
	    var requesttxt=m_xmlReq.responseText;	    
	    return requesttxt;
	}
}

