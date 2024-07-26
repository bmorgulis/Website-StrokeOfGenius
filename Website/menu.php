
<NAV id="full-menu">   
    <ul class="nav-menu" id="navigation" class="slimmenu">
        <li><a id="small321" href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="contactus.php">Contact Us</A></LI>
        <li><a href="sign_up.php">Sign Up</a></li>
        <li><a id="log-in" href="login.php">Log In</a></li>
    </ul>
</NAV>


<script src="js/jquery.slimmenu.min.js"></script>

<script>
$('#navigation').slimmenu(
{
    resizeWidth: '800',
    collapserTitle: 'Main Menu',
    animSpeed: 'medium',
    easingEffect: null,
    indentChildren: false,
    childrenIndenter: '&nbsp;'
});
</script>
