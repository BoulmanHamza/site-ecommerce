  var nom_facture,prenom_facture,ville_facture,pays_facture,adresse1_facture,adresse2_facture,email_facture,tele_facture,note_facture;
  var count_err=0;
  function valider() {
    count_err=0;
    var prenom=document.getElementById('prenom_facture');
    var prenomtest=/^([a-zA-Z]{3,20})$/;
    var nom=document.getElementById('nom_facture');
    var nomtest=/^([a-zA-Z]{3,20})$/;
    var ville=document.getElementById('ville_facture');
    var villetest=/^([a-zA-Z éèà]{3,20})$/;
    var pays=document.getElementById('pays_facture');
    var tele=document.getElementById('tele_facture');
    var teletest=/^(\+{1})([0-9]{10,15})$/;
    var email=document.getElementById('email_facture');
    var emailtest= /^([a-zA-Z0-9_.-]+)@([a-zA-Z0-9-]+)\.([a-zA-Z]{2,})$/;
    var adresse1=document.getElementById('adresse1_facture');
    var adresse2=document.getElementById('adresse2_facture');
    var note=document.getElementById('note_facture');

    if (prenomtest.test(prenom.value)==false) {
          prenom.setAttribute('style','border-color:red;');
          count_err++;
        }else{
          prenom.setAttribute('style','border-color:green;color:green;');
           prenom_facture=prenom.value;
        }
    if (nomtest.test(nom.value)==false) {
          nom.setAttribute('style','border-color:red;');
          count_err++;
        }else{
          nom.setAttribute('style','border-color:green;color:green;');
          nom_facture=nom.value;
        } 
    if (villetest.test(ville.value)==false) {
          ville.setAttribute('style','border-color:red;');
          count_err++;
        }else{
          ville.setAttribute('style','border-color:green;color:green;');
          ville_facture=ville.value;
        } 
    if (pays.value=="") {
          pays.setAttribute('style','border-color:red;');
          count_err++;
        }else{
          pays.setAttribute('style','border-color:green;color:green;');
          pays_facture=pays.value;
        } 
    if (teletest.test(tele.value)==false) {
          tele.setAttribute('style','border-color:red;');
          count_err++;
        }else{
          tele.setAttribute('style','border-color:green;color:green;');
          tele_facture=tele.value;
        }

    if (emailtest.test(email.value)==false) {
          email.setAttribute('style','border-color:red;');
          count_err++;
        }else{
          email.setAttribute('style','border-color:green;color:green;');
          email_facture=email.value;
        }



    if (adresse1.value.length<10) {
          adresse1.setAttribute('style','border-color:red;');
          count_err++;
        }else{
          adresse1.setAttribute('style','border-color:green;color:green;');
          adresse1_facture=adresse1.value;
        }

     
          adresse2.setAttribute('style','border-color:green;color:green;');
          adresse2_facture=adresse2.value;
     
          note.setAttribute('style','border-color:green;color:green;');
          note_facture=note.value;
        

  if(count_err==0){
    document.getElementById('details_facture').setAttribute('style','display:none');
     var v=document.getElementById('valider');
    v.setAttribute('data-target','#payement');
  }


  }


  // var _0x55f8=['length','test','setAttribute','adresse2_facture','#payement','style','value','valider','getElementById','email_facture','tele_facture','border-color:green;color:green;','border-color:red;','ville_facture'];(function(_0xdc2260,_0xfff8a6){var _0x55f80c=function(_0x158185){while(--_0x158185){_0xdc2260['push'](_0xdc2260['shift']());}};_0x55f80c(++_0xfff8a6);}(_0x55f8,0x165));var _0x1581=function(_0xdc2260,_0xfff8a6){_0xdc2260=_0xdc2260-0x167;var _0x55f80c=_0x55f8[_0xdc2260];return _0x55f80c;};var nom_facture,prenom_facture,ville_facture,pays_facture,adresse1_facture,adresse2_facture,email_facture,tele_facture,note_facture,count_err=0x0;function valider(){var _0x4a090e=_0x1581;count_err=0x0;var _0x42d7be=document[_0x4a090e(0x168)]('prenom_facture'),_0x265425=/^([a-zA-Z]{3,20})$/,_0xb1fda=document[_0x4a090e(0x168)]('nom_facture'),_0x21dd43=/^([a-zA-Z]{3,20})$/,_0x38b40=document[_0x4a090e(0x168)](_0x4a090e(0x16d)),_0x150e8a=/^([a-zA-Z éèà]{3,20})$/,_0x50bfc5=document[_0x4a090e(0x168)]('pays_facture'),_0x5b9efc=document[_0x4a090e(0x168)](_0x4a090e(0x16a)),_0x313de8=/^(\+{1})([0-9]{12})$/,_0x35ad14=document['getElementById'](_0x4a090e(0x169)),_0x3c8ae8=/^([a-zA-Z0-9_.-]+)@([a-zA-Z0-9-]+)\.([a-zA-Z]{2,})$/,_0x552aed=document[_0x4a090e(0x168)]('adresse1_facture'),_0x50603a=document[_0x4a090e(0x168)](_0x4a090e(0x171)),_0x4d489b=document['getElementById']('note_facture');_0x265425['test'](_0x42d7be['value'])==![]?(_0x42d7be[_0x4a090e(0x170)](_0x4a090e(0x173),'border-color:red;'),count_err++):(_0x42d7be[_0x4a090e(0x170)]('style',_0x4a090e(0x16b)),prenom_facture=_0x42d7be['value']);_0x21dd43[_0x4a090e(0x16f)](_0xb1fda[_0x4a090e(0x174)])==![]?(_0xb1fda[_0x4a090e(0x170)](_0x4a090e(0x173),_0x4a090e(0x16c)),count_err++):(_0xb1fda[_0x4a090e(0x170)](_0x4a090e(0x173),_0x4a090e(0x16b)),nom_facture=_0xb1fda[_0x4a090e(0x174)]);_0x150e8a['test'](_0x38b40['value'])==![]?(_0x38b40['setAttribute'](_0x4a090e(0x173),_0x4a090e(0x16c)),count_err++):(_0x38b40[_0x4a090e(0x170)](_0x4a090e(0x173),'border-color:green;color:green;'),ville_facture=_0x38b40[_0x4a090e(0x174)]);_0x50bfc5['value']==''?(_0x50bfc5[_0x4a090e(0x170)]('style','border-color:red;'),count_err++):(_0x50bfc5['setAttribute'](_0x4a090e(0x173),'border-color:green;color:green;'),pays_facture=_0x50bfc5[_0x4a090e(0x174)]);_0x313de8[_0x4a090e(0x16f)](_0x5b9efc[_0x4a090e(0x174)])==![]?(_0x5b9efc[_0x4a090e(0x170)]('style',_0x4a090e(0x16c)),count_err++):(_0x5b9efc['setAttribute']('style',_0x4a090e(0x16b)),tele_facture=_0x5b9efc[_0x4a090e(0x174)]);_0x3c8ae8[_0x4a090e(0x16f)](_0x35ad14[_0x4a090e(0x174)])==![]?(_0x35ad14['setAttribute'](_0x4a090e(0x173),_0x4a090e(0x16c)),count_err++):(_0x35ad14[_0x4a090e(0x170)](_0x4a090e(0x173),'border-color:green;color:green;'),email_facture=_0x35ad14[_0x4a090e(0x174)]);_0x552aed[_0x4a090e(0x174)][_0x4a090e(0x16e)]<0xa?(_0x552aed[_0x4a090e(0x170)](_0x4a090e(0x173),_0x4a090e(0x16c)),count_err++):(_0x552aed[_0x4a090e(0x170)](_0x4a090e(0x173),'border-color:green;color:green;'),adresse1_facture=_0x552aed[_0x4a090e(0x174)]);_0x50603a[_0x4a090e(0x170)]('style',_0x4a090e(0x16b)),adresse2_facture=_0x50603a[_0x4a090e(0x174)],_0x4d489b[_0x4a090e(0x170)](_0x4a090e(0x173),_0x4a090e(0x16b)),note_facture=_0x4d489b['value'];if(count_err==0x0){document['getElementById']('details_facture')[_0x4a090e(0x170)](_0x4a090e(0x173),'display:none');var _0x18ec11=document[_0x4a090e(0x168)](_0x4a090e(0x167));_0x18ec11[_0x4a090e(0x170)]('data-target',_0x4a090e(0x172));}}