<?php get_header(); ?>

    <main>
        <section class="busca_mapa">
            <div class="busca">
                <div class="conteudo_busca">
                    <h2>Encontre a loja<br/> mais próxima<br/> de você</h2>
                    <form action="">
                        <input name="buscaCep" placeholder="Digite CEP ou Endereço" />
                        <button class="btn_laranja">Buscar</button>
                    </form>
                    <a href="#">Ver todas as lojas</a>
                </div>
            </div>
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14851560.116387447!2d-52.96920666134386!3d-15.672942360528632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sempresta%20bem%20melhor!5e0!3m2!1spt-BR!2sbr!4v1621723976875!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>

        <section class="resultado">
            <div class="container conteudo_resultado">
                <div class="txt_resultado">
                    <h3>Melhor Resultado</h3>
                    <div class="avaliacoes">
                        <div class="estrelas">
                            <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                            <label for="cm_star-1"><i class="fa"></i></label>
                            <input type="radio" id="cm_star-1" name="fb" value="1"/>
                            <label for="cm_star-2"><i class="fa"></i></label>
                            <input type="radio" id="cm_star-2" name="fb" value="2"/>
                            <label for="cm_star-3"><i class="fa"></i></label>
                            <input type="radio" id="cm_star-3" name="fb" value="3"/>
                            <label for="cm_star-4"><i class="fa"></i></label>
                            <input type="radio" id="cm_star-4" name="fb" value="4"/>
                            <label for="cm_star-5"><i class="fa"></i></label>
                            <input type="radio" id="cm_star-5" name="fb" value="5"/>
                        </div>
                        <span>(327)</span>
                    </div>
                    <h2>Empresta Belo Horizonte</h2>
                    <div class="info_resultado">
                        <div class="endereco_resultado"><p>Av. Afonso Pena, 1005, Loja 02 - Centro</p></div>
                        <div class="telefone_resultado"><p>(31)3239-1005</p></div>
                        <div class="funcionamento_resultado">
                            <div class="item_funcionamento"><span>Domingo</span><span>Fechado</span></div>
                            <div class="item_funcionamento"><span>Segunda-feira</span><span>08h00 - 18h00</span></div>
                            <div class="item_funcionamento"><span>Terça-feira</span><span>08h00 - 18h00</span></div>
                            <div class="item_funcionamento"><span>Quarta-feira</span><span>08h00 - 18h00</span></div>
                            <div class="item_funcionamento"><span>Quinta-feira</span><span>08h00 - 18h00</span></div>
                            <div class="item_funcionamento"><span>Sexta-feira</span><span>08h00 - 18h00</span></div>
                            <div class="item_funcionamento"><span>Sábado</span><span>08h00 - 18h00</span></div>
                        </div>
                    </div>
                    <div class="contato_resultado">
                        <button class="cta cta_tel btn_laranja">Me ligue</button>
                        <button class="cta cta_wtspp">Falar pelo Whatsapp</button>
                    </div>
                </div>
                <div class="img_resultado">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/unidade-afonso-pena.jpg" alt="" />
                </div>
            </div>
        </section>

        <section class="lojas_proximas">
            <div class="container conteudo_lojas_proximas">
                <h3>Outras Lojas próximas<br/>
                <strong>4 Resultados</strong> em Belo Horizonte</h3>
                <div class="item_lojas_proximas">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lojas-proximas.jpg" alt="" />
                    <div class="txt_lojas_proximas">
                        <h4>Empresta Bem Melhor</h4>
                        <div class="avaliacoes">
                            <div class="estrelas">
                                <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                                <label for="cm_star-1"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-1" name="fb" value="1"/>
                                <label for="cm_star-2"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-2" name="fb" value="2"/>
                                <label for="cm_star-3"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-3" name="fb" value="3"/>
                                <label for="cm_star-4"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-4" name="fb" value="4"/>
                                <label for="cm_star-5"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-5" name="fb" value="5"/>
                            </div>
                            <span>(327)</span>
                        </div>
                        <div class="info_item_lojas_proximas">
                            <p>Av. Afonso Pena, 1005, Loja 02</p>
                            <p>Centro, 30130-002, Belo Horizonte</p>
                            <p>Aberto até as <strong>18:00</strong> - (16)2373-0291</p>
                        </div>
                    </div>
                    <div class="cta_lojas_proximas">
                        <button class=" cta cta_tel btn_laranja">Me ligue</button>
                    </div>
                </div>

                <div class="item_lojas_proximas">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lojas-proximas.jpg" alt="" />
                    <div class="txt_lojas_proximas">
                        <h4>Empresta Bem Melhor</h4>
                        <div class="avaliacoes">
                            <div class="estrelas">
                                <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                                <label for="cm_star-1"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-1" name="fb" value="1"/>
                                <label for="cm_star-2"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-2" name="fb" value="2"/>
                                <label for="cm_star-3"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-3" name="fb" value="3"/>
                                <label for="cm_star-4"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-4" name="fb" value="4"/>
                                <label for="cm_star-5"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-5" name="fb" value="5"/>
                            </div>
                            <span>(327)</span>
                        </div>
                        <div class="info_item_lojas_proximas">
                            <p>Av. Afonso Pena, 1005, Loja 02</p>
                            <p>Centro, 30130-002, Belo Horizonte</p>
                            <p>Aberto até as <strong>18:00</strong> - (16)2373-0291</p>
                        </div>
                    </div>
                    <div class="cta_lojas_proximas">
                        <button class="cta cta_tel btn_laranja">Me ligue</button>
                    </div>
                </div>

                <div class="item_lojas_proximas">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lojas-proximas.jpg" alt="" />
                    <div class="txt_lojas_proximas">
                        <h4>Empresta Bem Melhor</h4>
                        <div class="avaliacoes">
                            <div class="estrelas">
                                <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                                <label for="cm_star-1"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-1" name="fb" value="1"/>
                                <label for="cm_star-2"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-2" name="fb" value="2"/>
                                <label for="cm_star-3"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-3" name="fb" value="3"/>
                                <label for="cm_star-4"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-4" name="fb" value="4"/>
                                <label for="cm_star-5"><i class="fa"></i></label>
                                <input type="radio" id="cm_star-5" name="fb" value="5"/>
                            </div>
                            <span>(327)</span>
                        </div>
                        <div class="info_item_lojas_proximas">
                            <p>Av. Afonso Pena, 1005, Loja 02</p>
                            <p>Centro, 30130-002, Belo Horizonte</p>
                            <p>Aberto até as <strong>18:00</strong> - (16)2373-0291</p>
                        </div>
                    </div>
                    <div class="cta_lojas_proximas">
                        <button class="cta cta_tel btn_laranja">Me ligue</button>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php get_footer(); ?>