<?php

namespace Dso\Cielo\Nodes;

use Dso\Cielo\Nodes\TransactionNode;

/**
 * @author		João Batista Neto
 * @brief		Classes relacionadas ao webservice da Cielo
 * @package		dso.cielo.nodes
 */

/**
 * @brief		Nó captura
 * @details		Nó com dados da captura caso tenha passado por essa etapa.
 * @ingroup		Cielo
 * @class		CaptureNode
 */
class CaptureNode extends TransactionNode {
	/**
	 * Cria o nó XML referente ao objeto.
	 * @return	string
	 * @see		XMLNode::createXMLNode()
	 */
	public function createXMLNode() {
		$node = '<captura />';

		return $node;
	}
}
