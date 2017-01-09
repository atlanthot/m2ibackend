
function HomeController(req, res)
{
	res.setHeader("Content-Type","text/plain");
	res.end("HOME");	
}

function ContactController(req, res)
{
	res.setHeader("Content-Type","text/plain");
	res.end("CONTACT");
}

function CartController( req, res )
{
	var products = getAllProducts();
	var i = 0;
	var j = 0;
	var cart = new Array();
	
	req.session.cart = req.session.cart || new Array();
	
	i = req.session.cart.length;

	while( --i > -1 )
	{
		j = products.length;
		
		while( --j > -1 )
		{
			if( req.session.cart[i] == products[j].reference )
			{
				cart.push( products[j] );
			}
		}
	}
	
	res.setHeader("Content-Type","text/html");
	res.render('cart.ejs', {products: cart});
}

function AddProductController( req, res )
{
	req.session.cart = req.session.cart || new Array();
	req.session.cart.push(req.body.reference);
	res.redirect('/cart');
}

function RemoveProductController( req, res )
{
	var index = -1;
	
	req.session.cart = req.session.cart || new Array();
	index = req.session.cart.indexOf(req.body.reference);
	
	if( index > -1 )
	{
		req.session.cart.splice(index, 1);
	}
	
	res.redirect('/cart');
}

function ProductController(req, res)
{
	var currentProduct = null;
	var products = getAllProducts();
	var i = 0;
	
	
	if( req.params.reference )
	{
		i = products.length;
		while( --i > -1 )
		{
			if( products[i].reference == req.params.reference )
			{
				currentProduct = products[i];
			}
		}
		
		res.setHeader("Content-Type","text/html");
		res.render('product_detail.ejs', {product: currentProduct, hasForm: true});
	}
	else
	{
		res.setHeader("Content-Type","text/html");
		res.render('products.ejs', {products: products, hasForm: false});
	}
}

function ErrorController(req, res)
{
	res.setHeader("Content-Type","text/plain");
	res.send(404,"404 Not Found !");
}




/*model*/
function getAllProducts()
{
	var products = [
		{ name:"Splatoon", price: 50, reference: "splatoon", description:"Splash! Sploosh! Gare à toi!",img:'/img/splatoon.jpg'},
		{ name:"Assassin's Creed", price: 40, reference: "assassin", description:"Coup de pied circulaire, lame dans la jugulaire !",img:'/img/ac.jpg'},
		{ name:"Uncharted 4", price: 70, reference: "uncharted_4", description:"Rien ne surpasse un voleur... Enfin si, un voleur riche.",img:'/img/uncharted4.jpg'}
	];
	
	return products;
}

/*config*/
var session = require('cookie-session');
var bodyParser = require('body-parser');
var urlencodedParser = bodyParser.urlencoded({ extended: false });
var express = require('express');
var app = express();

app.use(session({secret:'myprivateshop'}));

app.use('/img', express.static('img'));
app.use('/css', express.static('css'));

//app.use(express.static('img'));
//app.use(express.static('css'));

app.get('/', HomeController);
app.get('/contact', ContactController);
app.get('/products', ProductController);
app.get('/cart', CartController);
app.get('/products/:reference', ProductController);
app.post('/products/add', urlencodedParser, AddProductController);
app.post('/products/remove', urlencodedParser, RemoveProductController);
app.use(ErrorController);

app.listen(3000);



