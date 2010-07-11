function proveri() {

	if (document.forms[0].textID.value == '') {
		alert("Niste uneli username!");
		document.forms[0].usernameID.focus();
		return false
	}

	if (document.forms[0].passwordID.value == '') {
		alert("Niste uneli sifru !");
		document.forms[0].passwordID.focus();
		return false;
	}

	if (document.forms[0].passwordID.value != document.forms[0].passwordID2.value) {
		alert("Sifra se ne poklapa!");
		document.forms[0].passwordID.focus();
		return false;
	}

	if (document.forms[0].imeID.value == '') {
		alert("Niste uneli Vase ime!");
		document.forms[0].imeID.focus();
		return false;
	}

	if (document.forms[0].prezimeID.value == '') {
		alert("Niste uneli Vase prezime!");
		document.forms[0].prezimeID.focus();
		return false;
	}

	if (document.forms[0].datumRodjID.value == '') {
		alert("Niste uneli Vas datum rodjenja!");
		document.forms[0].datumRodjID.focus();
		return false;
	}

	if (document.forms[0].emailID.value == '') {
		alert("Niste uneli Vas email!");
		document.forms[0].emailID.focus();
		return false;
	}
	if (document.forms[0].emailID.value.indexOf('@') == -1) {
		alert("Niste uneli e-mail adresu u odgovarajucem formatu!");
		document.forms[0].emailID.focus();
		return false;
	}

//var ocesNeces = confirm("Ispravno ste uneli sve podatke, da li nastavljate sa registracijom");
//	return ocesNeces;
}
