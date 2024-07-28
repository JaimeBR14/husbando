function edad() {
	var num_1;
	var num = new Number();
	num = Math.floor(Math.random()*101);
	if (num==0) {
		document.write("Tienes ", num, " años, eres un recien nacido, Bienvenido cristalito JianxinPeekLove ", '<BR/>');
	} else {
		if (num>=1 && num<=18) {
			document.write("Tienes ", num, " años, eres un bebé peepoShy ", '<BR/>');
		} else {
			if (num>18 && num<=30) {
				document.write("Tienes ", num, " años, estas en la flor de tu juventud catJAM ", '<BR/>');
			} else {
				if (num>30 && num<=60) {
					document.write("Tienes ", num, " años, eres un (una) suggar PepegaCard ", '<BR/>');
				} else {
					if (num>60 && num<=90) {
						document.write("Tienes ", num, " años, eres un (una) abuel@, hasta canas tenes Prayge ", '<BR/>');
					} else {
						if (num>90 && num<=99) {
							num_1 = 100-num;
							document.write("Tienes ", num, " de 100 años estas ", num_1, " años más cerca de la tumba MMEOWDY ", '<BR/>');
						} else {
							document.write("Tienes ", num, " vos ya deberias de estar con Mamá Coco, ¿Que hace aqui? SUSSY Ayo ", '<BR/>');
						}
					}
				}
			}
		}
	}
}
