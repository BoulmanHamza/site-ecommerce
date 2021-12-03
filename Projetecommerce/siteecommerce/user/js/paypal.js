function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect', 
          color: 'blue',
          layout: 'vertical',
          label: 'checkout',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"EUR","value":totalpayement}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            //alert('Transaction completed by ' + details.payer.name.given_name + '!');
            validerfacture(nom_facture,prenom_facture,ville_facture,pays_facture,adresse1_facture,adresse2_facture,email_facture,tele_facture,note_facture);
            // alert('nom_facture'+nom_facture+'/prenomfacture'+prenom_facture+'/ville'+ville_facture+'/pays'+pays_facture+'/email'+email_facture+'/telephone'+tele_facture+'/adr1'+adresse1_facture+'/adr2'+adresse2_facture+'note'+note_facture);
          });
        },

        onCancel:function(data){
            alert('le payement et cancled');
        },

        onError: function(err) {
          echecfacture();
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();