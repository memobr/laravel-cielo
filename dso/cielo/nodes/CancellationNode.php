<?php

namespace Dso\Cielo\Nodes;

use namespace Dso\Cielo\Nodes\TransactionNode;

/**
 * @author		João Batista Neto
 * @brief		Classes relacionadas ao webservice da Cielo
 * @package		dso.cielo.nodes
 */

/**
 * @brief		Nó cancelamento
 * @details		Nó com dados do cancelamento caso tenha passado por essa etapa
 * @ingroup		Cielo
 * @class		CancellationNode
 */
class CancellationNode extends TransactionNode {
	/**
	 * Cria o nó XML referente ao objeto.
	 * @return	string
	 * @see		XMLNode::createXMLNode()
	 */
	public function createXMLNode() {
		$node = '<cancelamento />';

		return $node;
	}
}