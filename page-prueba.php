<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
   <form method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">
      <input name="merchantId"    type="hidden"  value="508029"   >
      <input name="accountId"     type="hidden"  value="512321" >
      <input name="description"   type="hidden"  value="Test PAYU"  >
      <input name="referenceCode" type="hidden"  value="waytictest" >
      <input name="amount"        type="hidden"  value="3"   >
      <input name="tax"           type="hidden"  value="0"  >
      <input name="taxReturnBase" type="hidden"  value="0" >
      <input name="currency"      type="hidden"  value="USD" >
      <input name="signature"     type="hidden"  value="e2c1075df176c41d5a4ae9d9598d5713"  >
      <input name="test"          type="hidden"  value="1" >
      <input name="buyerEmail"    type="hidden"  value="test@test.com" >
      <input name="responseUrl"    type="hidden"  value="http://pasteliarte.com/response" >
      <input name="confirmationUrl"    type="hidden"  value="http://pasteliarte.com/confirmation" >
      <input name="Submit"        type="submit"  value="Enviar" >

      <input name="shippingAddress" type="hidden" value="calle 93 n 47 - 65" > 
      <input name="shippingCity" type="hidden" value="Bogota" > 
      <input name="shippingCountry" type="hidden" value="CO" > 

  </form>
</body>
</html>