
var express = require('express');
var app = express();



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

function ProductController(req, res)
{
	var products = [
		{ name:"Splatoon", price: 50, reference: "splatoon", description:"Splash! Sploosh! Gare à toi!", img:"/img/splatoon.jpg"},
		{ name:"Assassin's Creed", price: 40, reference: "assassin", description:"Coup de pied circulaire, lame dans la jugulaire !", img:"/img/ac.jpg"},
		{ name:"Uncharted 4", price: 70, reference: "uncharted_4", description:"Rien ne surpasse un voleur... Enfin si, un voleur riche.", img:"/img/uncharted4.jpg"}
	];
	
	var currentProduct = null;
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
		res.render('product_detail.ejs', {product: currentProduct, hasForm: false});
	}
	else
	{
		res.setHeader("Content-Type","text/html");
		res.render('products.ejs', {products: products});
	}
}

function ErrorController(req, res)
{
	res.setHeader("Content-Type","text/plain");
	res.send(404,"404 Not Found !");
}



app.use('/img', express.static('img'));
app.use('/css', express.static('css'));

app.get('/', HomeController);
app.get('/contact', ContactController);
app.get('/products', ProductController);
app.get('/products/:reference', ProductController);
app.use(ErrorController);
app.listen(3000);



