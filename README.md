<h1>Tienda virtual</h1>
<h2>Integrantes</h2>
<ul>
  <li>Andres Felipe Wilches Torres - 20172020114</li>
  <li>William Nicolas Buitrago Camacho - 20172020079</li>
  <li>Cristian Felipe Ramirez Ovalles - 20172020068</li>
</ul>
<h3>¿Que se encontrara en este repositorio?</h3>
<p>En este repositorio, principalmente se encontrara el planteamiento del problema, descripcion de los requerimientoss y roles de una tienda de barrio en linea, la cual facilitara la compra y venta de mercancias. A continuaci&oacuten se detallara en profunidad los detalles del proyecto.</p>
<ol>
  <li><h2>Roles</h2></li>  
  <p><b>Cliente:</b></br>Es quien compra los productos de la tienda.</p>
  <p><b>Domiciliario:</b></br>Es quien lleva los pedidos de las tiendas al cliente.</p>
  <p><b>Tendero:</b></br>Es quien se encarga de alistar los pedidos y entregarlos a los domiciliarios para que ellos despues ejecuten su rol.</p>
  <li><h2>Procesos</h2></li>
  <p><b>Venta de productos:</b></br>Diferentes formas de pago (debito,credito,contra-entrega). En caso de problema de devoluci&oacuten de dinero. Confirmacion del pago. Historico de compras asociado a clientes y domiciliarios.</p>
  <ul>
    <li>Metodo de pago y su gestion (credito, debito o contra entrega)</li>
    <li>Gestion de devoluciones y quejas</li>
  </ul></br>
  <p><b>Administracion de pedidos:</b></br>Se corrobora que el pedido exista en la base de datos, se valida la atencion y comunicacion con el cliente ademas de agendar una entrega.</p>
  <ul>
    <li>Gestion de inventario</li>
    <li>Atencion del pedido</li>
    <li>Agenda fecha de entrega del pedido</li>
    <li>Visualizar pedidos</li>
  </ul></br>
  <p><b>Acondicionamiento del pedido</b></br>Luego de validar el inventario, se retira de este, se confirma el pedido y se identifica la zona de entrega, ademas de su factura</p>
  <ul>
    <li>Retirar productos del inventario (BD)</li>
    <li>Confirma pedido</li>
    <li>Identificacion de zona entrega</li>
    <li>Facturacion</li>
  </ul></br>
  <p><b>Despacho</b></br>Se busca domiciliario disponible, se confirma este al cliente. El domiciliario tiene visual de la ubicacion de entrega y su ruta</p>
  <ul>
    <li>Buscar domiciliario disponible</li>
    <li>Muestra el domiciliario al cliente</li>
    <li>Se visualiza ubicacion de entrega</li>
    <li>Se muestra la ruta de entrega</li>
  </ul></br>
  <p><b>Gestion de inventario</b></p>
  <ul>
    <li>Retirar  o agergar productos del inventario (BD)</li>
  </ul></br>
  <li><h2>Historias de usuario</h2></li>
  </br><h3>Domiciliario:</h3>
  <ul>
    <li>Como domiciliario deseo agrupar todas las entregas para diligenciarlas de un solo despacho</li>
    <li>Como domiciliario deseo conocer la ruta de viaje del despacho</li>
    <li>Como domiciliario deseo ver reporte de quejas de mi atencion con la entrega al cliente</li>
  </ul>
  </br><h3>Tendero:</h3>
  <ul>
    <li>Como tendero deseo agrupar todos los pedidos recibidos para despacharlos</li> 
    <li>Como tendero deseo  que la orden del pedido genere factura para ser enviada con el domiciliario</li>
    <li>Como tendero deseo tener control de inventario para ofrecer productos en existencia</li>
    <li>Como tendero deseo tener reportes de clientes y quejas</li>
    <li>Como tendero deseo poder administrar ordenes de pedidos</li>
  </ul>
  </br><h3>Cliente:</h3>
  <ul>
    <li>Como cliente deseo solicitar al tendero productos desde mi dispositivo para facilitar compras</li> 
    <li>Como cliente deseo conocer la fecha de entrega de mi pedido</li>
    <li>Como cliente deseo seleccionar productos y agregarlos a mi pedido</li>
    <li>Como cliente deseo cancelar productos de mi pedido</li>
    <li>Como cliente deseo dar mi ubicacion automaticamente al sistema para facilitar la entrega</li>
    <li>Como cliente deseo seleccionar el tipo de pago para mis pedidos</li>
    <li>Como cliente deseo ver la factura de mi pedido</li>
  </ul>
  <li>Tareas sprint</li>
  <ul>
    <li>Crear el inicio / regitro para los usuarios</li>
    <li>Desarrollar / estructurar la Base de datos</li>
    <li>Maquetaci&ocuten de la pagina (HTML/CSS o  Bootstrap)</li>
  </ul>
</ol>
