var num_1;
var num = 15;
if (num==0) {
	document.write("Tienes " + num + " años, eres un recien nacido, Bienvenido cristalito JianxinPeekLove ");
} else {
	if (num>=1 && num<=18) {
		document.open();
		document.write("Tienes " + num + " años, eres un bebé peepoShy ");
		document.close();
	} else {
		if (num>18 && num<=30) {
			document.open();
			document.write("Tienes " + num + " años, estas en la flor de tu juventud catJAM ");
			document.close();
		} else {
			if (num>30 && num<=60) {
				document.open();
				document.write("Tienes " + num + " años, eres un (una) suggar PepegaCard ");
				document.close();
			} else {
				if (num>60 && num<=90) {
					document.open();
					document.write("Tienes " + num + " años, eres un (una) abuel@, hasta canas tenes Prayge ");
					document.close();
				} else {
					if (num>90 && num<=99) {
						num_1 = 100-num;
						document.open();
						document.write("Tienes " + num + " de 100 años estas ", num_1, " años más cerca de la tumba MMEOWDY ");
						document.close();
					} else {
						document.open();
						document.write("Tienes " + num + " vos ya deberias de estar con Mamá Coco, ¿Que hace aqui? SUSSY Ayo ");
						document.close();
					}
				}
			}
		}
	}
}
