</div>
    </div>
	<div class="copy">
	<p>Fashion Shop © 2017 CSS by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
	</div>
</body>
<script>
function check_regn() {
    var mobile = f.mobile.value
    var userid = f.userid.value
    var pwd = f.pwd.value
    var cpwd = f.cpwd.value
    
    if(!check_mobile(mobile)) {
        alert("Invalid Mobile Number")
        f.mobile.focus()
        return false
    }
    
    if(!check_email(userid)) {
        alert("Invalid Email/Userid")
        f.userid.focus()
        return false
    }
    
    if(pwd!=cpwd) {
        alert("Confirm Password not Match")
        f.cpwd.focus()
        return false
    }
    return true
}
    function check_email(e) {
	var ep = /^\w+\.{0,1}\w+\@[a-z]+\.([a-z]{3}|[a-z]{2}\.[a-z]{2}){1}$/
	return e.match(ep)
    }
    function check_mobile(m) {
	var mp = /^[987]\d{9}$/
	return m.match(mp)
    }
    
    function getObject() {
	if(window.ActiveXObject)
	    return new ActiveXObject("Microsoft.XMLHTTP")
	else
	    return new XMLHttpRequest()
    }
    
    function getSubCat(p) {
	if(p!="") {
	ob = getObject()
	ob.onreadystatechange = doWork
	ob.open("GET","getsubcat.php?cat="+p,true)
	ob.send()
	} else {
	    document.getElementById("scat").innerHTML = "<select name='subcat' required></select>"
	}
    }
    
    function doWork() {
	if(ob.readyState==4 && ob.status==200) {
	    document.getElementById("scat").innerHTML = ob.responseText
	}
    }
</script>
</html>