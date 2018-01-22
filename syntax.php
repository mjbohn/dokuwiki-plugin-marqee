<?php
/**
 * DokuWiki Plugin marquee (Syntax Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Michael Bohn <mjbohn@gmail.com>
 */

// must be run within Dokuwiki
if (!defined('DOKU_INC')) die();

class syntax_plugin_marquee extends DokuWiki_Syntax_Plugin {
    /**
     * @return string Syntax mode type
     */
    public function getType() {
        return 'formatting';
    }
    function getAllowedTypes() { return array('formatting'); }
    /**
     * @return string Paragraph type
     */
    public function getPType() {
        return 'block';
    }
    /**
     * @return int Sort order - Low numbers go before high numbers
     */
    public function getSort() {
        return 400;
    }

    /**
     * Connect lookup pattern to lexer.
     *
     * @param string $mode Parser mode
     */
    public function connectTo($mode) {
//        $this->Lexer->addSpecialPattern('<FIXME>',$mode,'plugin_marquee');
        $this->Lexer->addEntryPattern('<mticker.*?>(?=.*?</mticker>)',$mode,'plugin_marquee');
    }

    public function postConnect() {
        $this->Lexer->addExitPattern('</mticker>','plugin_marquee');
    }

    /**
     * Handle matches of the marquee syntax
     *
     * @param string          $match   The match of the syntax
     * @param int             $state   The state of the handler
     * @param int             $pos     The position in the document
     * @param Doku_Handler    $handler The handler
     * @return array Data for the renderer
     */
    public function handle($match, $state, $pos, Doku_Handler $handler){
        switch ($state) {
            case DOKU_LEXER_ENTER :      return array($state);

            case DOKU_LEXER_UNMATCHED :  return array($state, $match);
            case DOKU_LEXER_EXIT :       return array($state, '');
        }
        return array();
    }

    /**
     * Render xhtml output or metadata
     *
     * @param string         $mode      Renderer mode (supported modes: xhtml)
     * @param Doku_Renderer  $renderer  The renderer
     * @param array          $data      The data from the handler() function
     * @return bool If rendering was successful.
     */
    public function render($mode, Doku_Renderer $renderer, $data) {
        if($mode != 'xhtml') return false;
        list($state,$match) = $data;
        switch ($state) {
            case DOKU_LEXER_ENTER :
                $renderer->doc .= "<div class='plugin_marquee'>";
                break;

            case DOKU_LEXER_UNMATCHED :
                $renderer->doc .= "$match";
                break;
            case DOKU_LEXER_EXIT :
                $renderer->doc .= "</div> ";
                break;
        }
        return true;
    }
}

// vim:ts=4:sw=4:et:
