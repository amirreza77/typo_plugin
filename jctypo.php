<?php

/**

 * @package    jctypo

 * @subpackage D:

 * @author     amirrezatehrani {@link joomlacentral.com}

 * @author     Created on 17-Mar-2017

 * @license    GNU/GPL

 */



//-- No direct access

defined('_JEXEC') || die('=;)');





jimport('joomla.plugin.plugin');



/**

 * Content Plugin.

 *

 * @package    jctypo

 * @subpackage Plugin

 */

class plgContentjctypo extends JPlugin

{

    /**

     * Example after delete method.

     *

     * @param  string  $context  The context for the content passed to the plugin.

     * @param  object  $data     The data relating to the content that was deleted.

     *

     * @return boolean

     */

    public function onContentAfterDelete($context, $data)

    {

        return true;

    }//function



    /**

     * Example after display content method

     *

     * Method is called by the view and the results are imploded and displayed in a placeholder

     *

     * @param  string  $context     The context for the content passed to the plugin.

     * @param  object  &$article    The content object.  Note $article->text is also available

     * @param  object  &$params     The content params

     * @param  int     $limitstart  The 'page' number

     *

     * @return string

     */

    public function onContentAfterDisplay($context, &$article, &$params, $limitstart)

    {

        return '';

    }//function



    /**

     * Example after save content method

     * Article is passed by reference, but after the save, so no changes will be saved.

     * Method is called right after the content is saved

     *

     * @param  string  $context   The context of the content passed to the plugin (added in 1.6)

     * @param  object  &$article  A JTableContent object

     * @param  bool    $isNew     If the content is just about to be created

     *

     * @return boolean

     */

    public function onContentAfterSave($context, &$article, $isNew)

    {

        return true;

    }//function



    /**

     * Example after display title method

     *

     * Method is called by the view and the results are imploded and displayed in a placeholder

     *

     * @param  string  $context     The context for the content passed to the plugin.

     * @param  object  &$article    The content object.  Note $article->text is also available

     * @param  object  &$params     The content params

     * @param  int     $limitstart  The 'page' number

     *

     * @return  string

     */

    public function onContentAfterTitle($context, &$article, &$params, $limitstart)

    {

        return '';

    }//function



    /**

     * Example before delete method.

     *

     * @param  string  $context  The context for the content passed to the plugin.

     * @param  object  $data     The data relating to the content that is to be deleted.

     *

     * @return  boolean

     */

    public function onContentBeforeDelete($context, $data)

    {

        return true;

    }//function



    /**

     * Example before display content method

     *

     * Method is called by the view and the results are imploded and displayed in a placeholder

     *

     * @param  string  $context     The context for the content passed to the plugin.

     * @param  object  &$article    The content object.  Note $article->text is also available

     * @param  object  &$params     The content params

     * @param  int     $limitstart  The 'page' number

     *

     * @return string

     */

    public function onContentBeforeDisplay($context, &$article, &$params, $limitstart)

    {

        return '';

    }//function



    /**

     * Example before save content method

     *

     * Method is called right before content is saved into the database.

     * Article object is passed by reference, so any changes will be saved!



     * NOTE:  Returning false will abort the save with an error.

     * You can set the error by calling $article->setError($message)

     *

     * @param  string  $context   The context of the content passed to the plugin.

     * @param  object  &$article  A JTableContent object

     * @param  bool    $isNew     If the content is just about to be created

     *

     * @return  boolean  If false, abort the save

     */

    public function onContentBeforeSave($context, &$article, $isNew)

    {

        return true;

    }//function



    /**

     * Example after delete method.

     *

     * @param  string  $context  The context for the content passed to the plugin.

     * @param  array   $pks      A list of primary key ids of the content that has changed state.

     * @param  int     $value    The value of the state that the content has been changed to.

     *

     * @return  boolean

     */

    public function onContentChangeState($context, $pks, $value)

    {

        return true;

    }//function



    /**

     * Example prepare content method

     *

     * Method is called by the view

     *

     * @param  string  $context     The context of the content being passed to the plugin.

     * @param  object  &$article    The content object.  Note $article->text is also available

     * @param  object  &$params     The content params

     * @param  int     $limitstart  The 'page' number

     */

    public function onContentPrepare($context, &$article, &$params, $limitstart)

    {

		$document = JFactory::getDocument();

		$url= "plugins/content/jctypo/jctypo.css";

		$document->addStyleSheet($url);

		//var_dump($article->text);

		$text = $article->text;

		//alert



			if(strpos($text, "{jctypo_alert}") !== false) {

				$text = str_replace("{jctypo_alert}","<div class='jctypo_shadow'><div class='jctypo_alert'>",$text);

			}

			if(strpos($text, "{/jctypo_alert}") !== false) {

				$text = str_replace("{/jctypo_alert}","</div><div class='alertb'></div></div>",$text);

			}



			if(strpos($text, "{jctypo_info}") !== false) {

				$text = str_replace("{jctypo_info}","<div class='jctypo_shadow'><div class='jctypo_info'>",$text);

			}

			if(strpos($text, "{/jctypo_info}") !== false) {

				$text = str_replace("{/jctypo_info}","</div><div class='infob'></div></div>",$text);

			}



			if(strpos($text, "{jctypo_warning}") !== false) {

				$text = str_replace("{jctypo_warning}","<div class='jctypo_shadow'><div class='jctypo_warning'>",$text);

			}

			if(strpos($text, "{/jctypo_warning}") !== false) {

				$text = str_replace("{/jctypo_warning}","</div><div class='warningb'></div></div>",$text);

			}

			//jctypo_download

			if(strpos($text, "{jctypo_download}") !== false) {

				$text = str_replace("{jctypo_download}","<div class='jctypo_shadow'><div class='jctypo_download'>",$text);

			}

			if(strpos($text, "{/jctypo_download}") !== false) {

				$text = str_replace("{/jctypo_download}","</div><div class='downloadb'></div></div>",$text);

			}



			if(strpos($text, "{jctypo_sticky}") !== false) {

				$text = str_replace("{jctypo_sticky}","<div class='jctypo_shadow'><div class='jctypo_sticky'>",$text);

			}

			if(strpos($text, "{/jctypo_sticky}") !== false) {

				$text = str_replace("{/jctypo_sticky}","</div><div class='stickyb'></div></div>",$text);

			}



			//code

			if(strpos($text, "{jctypo_code}") !== false) {

				$text = str_replace("{jctypo_code}","<div class='jctypo_shadow'><div class='jctypo_code'><pre>",$text);

			}

			if(strpos($text, "{/jctypo_code}") !== false) {

				$text = str_replace("{/jctypo_code}","</pre></div><div class='codeb'></div></div>",$text);

			}





		//jctypo_rounded1



				if(strpos($text, "{jctypo_rounded1}") !== false) {

				$text = str_replace("{jctypo_rounded1}","<div class='jctypo_shadow'><div class='jctypo_rounded1b'></div><div class='jctypo_rounded1'>",$text);

			}

			if(strpos($text, "{/jctypo_rounded1}") !== false) {

				$text = str_replace("{/jctypo_rounded1}","</div></div>",$text);

			}



			if(strpos($text, "{jctypo_rounded2}") !== false) {

				$text = str_replace("{jctypo_rounded2}","<div class='jctypo_shadow'><div class='jctypo_rounded2b'></div><div class='jctypo_rounded2'>",$text);

			}

			if(strpos($text, "{/jctypo_rounded2}") !== false) {

				$text = str_replace("{/jctypo_rounded2}","</div></div>",$text);

			}



			if(strpos($text, "{jctypo_rounded3}") !== false) {

				$text = str_replace("{jctypo_rounded3}","<div class='jctypo_shadow'><div class='jctypo_rounded3b'></div><div class='jctypo_rounded3'>",$text);

			}

			if(strpos($text, "{/jctypo_rounded3}") !== false) {

				$text = str_replace("{/jctypo_rounded3}","</div></div>",$text);

			}



			if(strpos($text, "{jctypo_rounded4}") !== false) {

				$text = str_replace("{jctypo_rounded4}","<div class='jctypo_shadow'><div class='jctypo_rounded4b'></div><div class='jctypo_rounded4'>",$text);

			}

			if(strpos($text, "{/jctypo_rounded4}") !== false) {

				$text = str_replace("{/jctypo_rounded4}","</div></div>",$text);

			}





		$article->text = $text;





    }

}//class
