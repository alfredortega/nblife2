<?php
class HTMA
{

    public static function findAllByCustomerId($cid)
    {
        return R::find('htmaresult','customer_id = ?',[$cid]);
    }

    public static function findByID($htmaid)
    {
        return R::load('htmaresult',$htmaid);
    }

    public static function addhtmaresult($cid,$labnumber,$labdate,$calcium,$magnesium,$sodium,$potassium, $iron,$copper,$manganese,$zinc,$chromium,$selenium,$phosphorus,$lead,$mercury,$cadmium,$arsenic,$aluminum,$nickel,$cobalt,$molybdenum,$lithium,$boron)
    {
        $htma = R::dispense('htmaresult');
        $customer = R::load('customer',$cid);
        $htma->customer = $customer;
        $htma->labnumber = $labnumber;
        $htma->labdate = $labdate;

        //nutrient minerals
        $htma->calcium = $calcium;
        $htma->magnesium = $magnesium;
        $htma->sodium = $sodium;
        $htma->potassium = $potassium;
        $htma->iron = $iron;
        $htma->copper = $copper;
        $htma->manganese = $manganese;
        $htma->zinc = $zinc;
        $htma->chromium = $chromium;
        $htma->selenium = $selenium;
        $htma->phosphorus = $phosphorus;

        //toxic minerals
        $htma->lead = $lead;
        $htma->mercury = $mercury;
        $htma->cadmium = $cadmium;
        $htma->arsenic = $arsenic;
        $htma->aluminum = $aluminum;

        //additional minerals
        $htma->nickel = $nickel;
        $htma->cobalt = $cobalt;
        $htma->molybdenum = $molybdenum;
        $htma->lithium = $lithium;
        $htma->boron = $boron;             

        $retval = R::store($htma);
        return $retval;
    }

    public static function updatehtmaresult($htmaid,$labnumber,$labdate,$calcium,$magnesium,$sodium,$potassium, $iron,$copper,$manganese,$zinc,$chromium,$selenium,$phosphorus,$lead,$mercury,$cadmium,$arsenic,$aluminum,$nickel,$cobalt,$molybdenum,$lithium,$boron)
    {
        $htma = R::load('htmaresult',$htmaid);
        $htma->labnumber = $labnumber;
        $htma->labdate = $labdate;

        //nutrient minerals
        $htma->calcium = $calcium;
        $htma->magnesium = $magnesium;
        $htma->sodium = $sodium;
        $htma->potassium = $potassium;
        $htma->iron = $iron;
        $htma->copper = $copper;
        $htma->manganese = $manganese;
        $htma->zinc = $zinc;
        $htma->chromium = $chromium;
        $htma->selenium = $selenium;
        $htma->phosphorus = $phosphorus;

        //toxic minerals
        $htma->lead = $lead;
        $htma->mercury = $mercury;
        $htma->cadmium = $cadmium;
        $htma->arsenic = $arsenic;
        $htma->aluminum = $aluminum;

        //additional minerals
        $htma->nickel = $nickel;
        $htma->cobalt = $cobalt;
        $htma->molybdenum = $molybdenum;
        $htma->lithium = $lithium;
        $htma->boron = $boron;   
        
        $retval = R::store($htma);
        return $retval;
    }

    public static function delete($htmaid)
    {
        R::hunt('htmaresult','id = ?',[$htmaid]);
        //$htma = R::load('htmaresult',$htmaid);
        //R::trash($htma);
    }

}
?>