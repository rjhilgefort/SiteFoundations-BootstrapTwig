<?php

class config {
  
  private $debug = false;
  
  /**
   *
   * @param type $includeAppConfig
   * @param type $loadTwig
   * @param type $ptr
   * @return type
   * @throws Exception 
   */
  function __construct() {
    $this->root = dirname(__DIR__);
  }

  public function load($includeAppConfig=false, $loadTwig=false){
    try
    { 
      //includeAppConfig
      if($includeAppConfig === false){
        //do nothing
      }elseif($includeAppConfig === true){
        require_once $this->root."/app/main.php";
      }else{
        throw new Exception("includeAppConfig parameter was unexpected");
      }
      
       //loadTwig
      if($loadTwig === false){
        $rtn = true;
      }elseif($loadTwig === true){
        $rtn = $this->loadTwig();
      }else{
        throw new Exception("loadTwig array parameter was unexpected");
        $rtn = false;
      }
      return $rtn;
    }
    catch (Exception $e)
    {
      echo "<pre>Error in config::load() ---  ".$e->getMessage()."</pre>";
    } 
  }
  
  public function destroy() {
    self::rrmdir($this->root."/app/view/lib");
  }
  
  /**
   *
   * @param type $ptr
   * @return \Twig_Environment 
   */
  private function loadTwig () {
    //move templates over
    self::copy_directory($this->root."/lib/TwigTemplates", $this->root."/app/view/lib");
    
    require_once $this->root."/lib/Twig/Autoloader.php";
    Twig_Autoloader::register();
    $loader = new Twig_Loader_Filesystem($this->root."/app/view");
    $twig = new Twig_Environment($loader, array(
              'debug' => $this->debug,
              'cache' => $this->root.'/lib/compilation_cache',
              'auto_reload' => true));
    
    return $twig;
  }
  
  public static function copy_directory( $source, $destination ) {
    if ( is_dir( $source ) ) {
      @mkdir( $destination );
      $directory = dir( $source );
      while ( FALSE !== ( $readdirectory = $directory->read() ) ) {
        if ( $readdirectory == '.' || $readdirectory == '..' ) {
          continue;
        }
        $PathDir = $source . '/' . $readdirectory; 
        if ( is_dir( $PathDir ) ) {
          copy_directory( $PathDir, $destination . '/' . $readdirectory );
          continue;
        }
        copy( $PathDir, $destination . '/' . $readdirectory );
      }

      $directory->close();
    }else {
      copy( $source, $destination );
    }
  }
  
  public static function rrmdir($dir) {
    foreach(glob($dir . '/*') as $file) {
      if(is_dir($file))
        rrmdir($file);
      else
        unlink($file);
    }
    rmdir($dir);
  }
  
}
?>
